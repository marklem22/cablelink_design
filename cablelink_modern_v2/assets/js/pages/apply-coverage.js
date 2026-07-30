(function () {
  'use strict';

  var section = document.getElementById('coverage-areas');
  var mapElement = document.getElementById('coverage-map');
  var fallback = document.querySelector('.coverage-map-fallback');
  var tabs = Array.prototype.slice.call(document.querySelectorAll('.coverage-tab'));
  var panels = Array.prototype.slice.call(document.querySelectorAll('.coverage-items[data-panel]'));
  var items = Array.prototype.slice.call(document.querySelectorAll('.coverage-item'));
  var viewAll = document.querySelector('.coverage-view-all');
  var areas = [
    { provider: 'iblaze', name: 'Muntinlupa', lat: 14.4081, lng: 121.0415, radius: 5200, notes: 'Includes Filinvest coverage zone.' },
    { provider: 'iblaze', name: 'Pasay', lat: 14.5378, lng: 120.9980, radius: 3800, notes: 'Includes SMDC developments.' },
    { provider: 'iblaze', name: 'Manila', lat: 14.5995, lng: 120.9842, radius: 5600, notes: 'Includes SMDC, DMCI, and Cityland.' },
    { provider: 'iblaze', name: 'Bacoor, Cavite', lat: 14.4624, lng: 120.9645, radius: 6200, notes: 'Metro south expansion zone.' },
    { provider: 'iblaze', name: 'Mandaluyong', lat: 14.5794, lng: 121.0359, radius: 3600, notes: 'Includes Cityland sites.' },
    { provider: 'fiberlink', name: 'Paranaque', lat: 14.4793, lng: 121.0198, radius: 4600, notes: 'Fiber corridor in the south metro.' },
    { provider: 'fiberlink', name: 'Las Pinas', lat: 14.4445, lng: 120.9939, radius: 4300, notes: 'Residential and mixed-use coverage zone.' },
    { provider: 'fiberlink', name: 'Imus, Cavite', lat: 14.4297, lng: 120.9367, radius: 5600, notes: 'Cavite expansion coverage.' },
    { provider: 'fiberlink', name: 'Sta. Maria, Bulacan', lat: 14.8187, lng: 120.9569, radius: 9000, notes: 'Northern coverage cluster.' },
    { provider: 'fiberlink', name: 'Quezon City', lat: 14.6760, lng: 121.0437, radius: 6800, notes: 'Includes SMDC, Cityland, and DMCI.' }
  ];
  var map;
  var layerSets = new Map();
  var activeItem = null;
  var activeProvider = 'iblaze';

  if (!section || !mapElement || !fallback) return;

  function keyFor(area) {
    return area.provider + '|' + area.name;
  }

  function setActiveItem(item) {
    if (activeItem) activeItem.classList.remove('is-active');
    activeItem = item || null;
    if (activeItem) activeItem.classList.add('is-active');
  }

  function visibleFor(area) {
    if (activeItem) return keyFor(area) === activeItem.dataset.provider + '|' + activeItem.dataset.area;
    return activeProvider === 'all' || area.provider === activeProvider;
  }

  function syncMap() {
    if (!map) return;
    layerSets.forEach(function (set, key) {
      var visible = visibleFor(set.area);
      if (visible) {
        if (!map.hasLayer(set.circle)) set.circle.addTo(map);
        if (!map.hasLayer(set.label)) set.label.addTo(map);
      } else {
        if (map.hasLayer(set.circle)) map.removeLayer(set.circle);
        if (map.hasLayer(set.label)) map.removeLayer(set.label);
      }
    });
  }

  function fitMap() {
    var points = [];
    layerSets.forEach(function (set) {
      if (visibleFor(set.area)) points.push([set.area.lat, set.area.lng]);
    });
    if (points.length) map.fitBounds(points, { padding: [20, 20], maxZoom: activeProvider === 'all' ? 11 : 12 });
  }

  function setProvider(provider) {
    activeProvider = provider;
    setActiveItem(null);
    tabs.forEach(function (tab) {
      var selected = provider !== 'all' && tab.dataset.tab === provider;
      tab.classList.toggle('is-active', selected);
      tab.setAttribute('aria-selected', String(selected));
    });
    panels.forEach(function (panel) {
      panel.hidden = provider !== 'all' && panel.dataset.panel !== provider;
    });
    if (map) {
      syncMap();
      fitMap();
    }
  }

  function focusArea(item) {
    var set = layerSets.get(item.dataset.provider + '|' + item.dataset.area);
    if (!set || !map) return;
    setActiveItem(item);
    syncMap();
    map.fitBounds(set.circle.getBounds(), { padding: [20, 20], maxZoom: Number(item.dataset.zoom) || 13 });
    set.circle.openPopup();
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () { setProvider(tab.dataset.tab); });
  });
  if (viewAll) viewAll.addEventListener('click', function () { setProvider('all'); });

  if (!window.L) {
    fallback.textContent = 'The coverage map could not be loaded right now. Please reload the page and try again.';
    return;
  }

  map = window.L.map(mapElement, { scrollWheelZoom: false, zoomControl: true });
  window.L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  areas.forEach(function (area) {
    var isIblaze = area.provider === 'iblaze';
    var color = isIblaze ? '#F78220' : '#007AFE';
    var circle = window.L.circle([area.lat, area.lng], {
      radius: area.radius, color: color, weight: 2, opacity: .95, fillColor: color, fillOpacity: .24
    });
    var label = window.L.marker([area.lat, area.lng], {
      interactive: false,
      icon: window.L.divIcon({
        className: 'coverage-label-wrap',
        html: '<div class="coverage-label ' + area.provider + '">' + area.name + '</div>',
        iconSize: null,
        iconAnchor: [0, 0]
      })
    });
    circle.bindPopup('<strong>' + area.name + '</strong><span>' + (isIblaze ? 'Iblaze' : 'Fiberlink') + ' proposed coverage area. ' + area.notes + '</span>');
    layerSets.set(keyFor(area), { area: area, circle: circle, label: label });
  });

  items.forEach(function (item) {
    item.addEventListener('click', function () { focusArea(item); });
  });

  setProvider(activeProvider);
  fallback.style.display = 'none';
  window.setTimeout(function () { map.invalidateSize(); }, 0);
}());