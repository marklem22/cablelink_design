(function () {
  'use strict';

  function setupOfficeLocator() {
    var officeCards = Array.prototype.slice.call(document.querySelectorAll('.office-card[data-lat][data-lng]'));
    var mapElement = document.getElementById('office-map');
    var mapFallback = document.querySelector('.map-fallback');
    var detailName = document.getElementById('selected-office-name');
    var detailAddress = document.getElementById('selected-office-address');
    var detailHours = document.getElementById('selected-office-hours');
    var detailPhoneRow = document.getElementById('selected-office-phone-row');
    var detailPhone = document.getElementById('selected-office-phone');
    var activeCard = null;
    var map = null;
    var cardMarkers = new Map();

    if (!officeCards.length) return;

    function getOfficeDetails(card) {
      return {
        name: card.dataset.office || card.querySelector('.office-name').textContent.trim(),
        address: card.dataset.address || card.querySelector('.office-addr').textContent.trim(),
        phone: card.dataset.phone || '',
        workDays: card.dataset.workDays || '',
        workHours: card.dataset.workHours || ''
      };
    }

    function updateOfficeDetails(card) {
      var details = getOfficeDetails(card);
      var hours = [details.workDays, details.workHours].filter(Boolean).join(', ');

      if (detailName) detailName.textContent = details.name;
      if (detailAddress) detailAddress.textContent = details.address;
      if (detailHours) detailHours.textContent = hours || 'Hours not listed';

      if (detailPhoneRow) detailPhoneRow.hidden = !details.phone;
      if (detailPhone) {
        detailPhone.textContent = details.phone;
        detailPhone.href = details.phone ? 'tel:' + details.phone.replace(/[^\d+]/g, '') : 'tel:';
      }
    }

    function setActiveCard(card) {
      if (activeCard) {
        activeCard.classList.remove('is-active');
        activeCard.setAttribute('aria-pressed', 'false');
      }

      activeCard = card;
      activeCard.classList.add('is-active');
      activeCard.setAttribute('aria-pressed', 'true');
      updateOfficeDetails(activeCard);
    }

    function focusOffice(card, shouldOpenPopup) {
      var marker;

      setActiveCard(card);
      marker = cardMarkers.get(card);
      if (!map || !marker) return;

      map.flyTo(marker.getLatLng(), 14, { duration: 1.25 });
      if (shouldOpenPopup) marker.openPopup();
    }

    officeCards.forEach(function (card) {
      card.addEventListener('click', function () {
        focusOffice(card, true);
      });

      card.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          focusOffice(card, true);
        }
      });
    });

    if (mapElement && window.L) {
      var markerIcon = L.divIcon({
        className: '',
        html: '<div class="office-map-marker"></div>',
        iconSize: [18, 18],
        iconAnchor: [9, 9],
        popupAnchor: [0, -10]
      });
      var bounds = [];

      map = L.map(mapElement, { scrollWheelZoom: false });
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      officeCards.forEach(function (card) {
        var lat = Number(card.dataset.lat);
        var lng = Number(card.dataset.lng);
        var details;
        var marker;

        if (Number.isNaN(lat) || Number.isNaN(lng)) return;

        details = getOfficeDetails(card);
        marker = L.marker([lat, lng], { icon: markerIcon }).addTo(map);
        marker.bindPopup('<strong>' + details.name + '</strong><span>' + details.address + '</span>');
        marker.on('click', function () {
          setActiveCard(card);
        });

        cardMarkers.set(card, marker);
        bounds.push([lat, lng]);
      });

      if (bounds.length) {
        map.fitBounds(bounds, { padding: [36, 36] });
        setTimeout(function () {
          map.invalidateSize();
        }, 0);
      }

      if (mapFallback) mapFallback.hidden = true;
    } else if (mapFallback) {
      mapFallback.textContent = 'The map could not be loaded right now. Please check your internet connection and reload the page.';
    }

    function findOfficeFromHash() {
      var target = window.location.hash.slice(1);
      if (!target) return null;
      return officeCards.find(function (card) { return card.id === target; }) || null;
    }

    function selectInitialOffice() {
      var requestedCard = findOfficeFromHash();
      focusOffice(requestedCard || officeCards[0], Boolean(requestedCard));
    }

    window.addEventListener('hashchange', selectInitialOffice);
    selectInitialOffice();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', setupOfficeLocator);
  } else {
    setupOfficeLocator();
  }
}());
