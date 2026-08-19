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
    { provider: 'iblaze', name: 'Las Pinas', lat: 14.4445, lng: 120.9939, radius: 4300, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Paranaque', lat: 14.4793, lng: 121.0198, radius: 4600, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Muntinlupa', lat: 14.4081, lng: 121.0415, radius: 5200, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Pasay', lat: 14.5378, lng: 120.9980, radius: 3800, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Taguig', lat: 14.5176, lng: 121.0509, radius: 5800, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Manila', lat: 14.5995, lng: 120.9842, radius: 5600, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Valenzuela', lat: 14.7000, lng: 120.9833, radius: 5600, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Mandaluyong', lat: 14.5794, lng: 121.0359, radius: 3600, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Makati', lat: 14.5547, lng: 121.0244, radius: 4200, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Pasig', lat: 14.5764, lng: 121.0851, radius: 5200, notes: 'Metro Manila.' },
    { provider: 'iblaze', name: 'Bacoor, Cavite', lat: 14.4624, lng: 120.9645, radius: 6200, notes: 'Cavite.' },
    { provider: 'iblaze', name: 'Imus, Cavite', lat: 14.4297, lng: 120.9367, radius: 5600, notes: 'Cavite.' },
    { provider: 'iblaze', name: 'San Pedro, Laguna', lat: 14.3583, lng: 121.0583, radius: 5000, notes: 'Laguna.' },
    { provider: 'iblaze', name: 'Binan, Laguna', lat: 14.3386, lng: 121.0827, radius: 5200, notes: 'Laguna.' },
    { provider: 'iblaze', name: 'Sta. Rosa, Laguna', lat: 14.3122, lng: 121.1114, radius: 5800, notes: 'Laguna.' },
    { provider: 'iblaze', name: 'Antipolo, Rizal', lat: 14.6255, lng: 121.1245, radius: 7000, notes: 'Rizal.' },
    { provider: 'iblaze', name: 'San Mateo, Rizal', lat: 14.6969, lng: 121.1230, radius: 5000, notes: 'Rizal.' },
    { provider: 'iblaze', name: 'Rodriguez, Rizal', lat: 14.7276, lng: 121.1418, radius: 6500, notes: 'Rizal.' },
    { provider: 'iblaze', name: 'Cainta, Rizal', lat: 14.5786, lng: 121.1222, radius: 5200, notes: 'Rizal.' },
    { provider: 'fiberlink', name: 'Las Pinas', lat: 14.4445, lng: 120.9939, radius: 4300, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Paranaque', lat: 14.4793, lng: 121.0198, radius: 4600, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Muntinlupa', lat: 14.4081, lng: 121.0415, radius: 5200, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Pateros', lat: 14.5440, lng: 121.0690, radius: 2300, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Taguig', lat: 14.5176, lng: 121.0509, radius: 5800, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Manila', lat: 14.5995, lng: 120.9842, radius: 5600, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Quezon City', lat: 14.6760, lng: 121.0437, radius: 6800, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Valenzuela', lat: 14.7000, lng: 120.9833, radius: 5600, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Mandaluyong', lat: 14.5794, lng: 121.0359, radius: 3600, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'South Caloocan', lat: 14.6513, lng: 120.9703, radius: 4200, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'North Caloocan', lat: 14.7560, lng: 121.0440, radius: 6500, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'San Juan', lat: 14.6019, lng: 121.0355, radius: 2600, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Marikina', lat: 14.6507, lng: 121.1029, radius: 4400, notes: 'Metro Manila.' },
    { provider: 'fiberlink', name: 'Bacoor, Cavite', lat: 14.4624, lng: 120.9645, radius: 6200, notes: 'Cavite.' },
    { provider: 'fiberlink', name: 'Imus, Cavite', lat: 14.4297, lng: 120.9367, radius: 5600, notes: 'Cavite.' },
    { provider: 'fiberlink', name: 'Kawit, Cavite', lat: 14.4441, lng: 120.9016, radius: 4400, notes: 'Cavite.' },
    { provider: 'fiberlink', name: 'San Pedro, Laguna', lat: 14.3583, lng: 121.0583, radius: 5000, notes: 'Laguna.' },
    { provider: 'fiberlink', name: 'Binan, Laguna', lat: 14.3386, lng: 121.0827, radius: 5200, notes: 'Laguna.' },
    { provider: 'fiberlink', name: 'Sta. Rosa, Laguna', lat: 14.3122, lng: 121.1114, radius: 5800, notes: 'Laguna.' },
    { provider: 'fiberlink', name: 'Antipolo, Rizal', lat: 14.6255, lng: 121.1245, radius: 7000, notes: 'Rizal.' },
    { provider: 'fiberlink', name: 'San Mateo, Rizal', lat: 14.6969, lng: 121.1230, radius: 5000, notes: 'Rizal.' },
    { provider: 'fiberlink', name: 'Rodriguez, Rizal', lat: 14.7276, lng: 121.1418, radius: 6500, notes: 'Rizal.' },
    { provider: 'fiberlink', name: 'Sta. Maria, Bulacan', lat: 14.8187, lng: 120.9569, radius: 9000, notes: 'Bulacan.' },
    { provider: 'fiberlink', name: 'Pandi, Bulacan', lat: 14.8650, lng: 120.9570, radius: 6000, notes: 'Bulacan.' }
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
    layerSets.forEach(function (set) {
      var visible = visibleFor(set.area);
      var showLabel = Boolean(activeItem) && visible;
      if (visible) {
        if (!map.hasLayer(set.circle)) set.circle.addTo(map);
      } else if (map.hasLayer(set.circle)) {
        map.removeLayer(set.circle);
      }
      if (showLabel) {
        if (!map.hasLayer(set.label)) set.label.addTo(map);
      } else if (map.hasLayer(set.label)) {
        map.removeLayer(set.label);
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
    circle.bindPopup('<strong>' + area.name + '</strong><span>' + (isIblaze ? 'I-Blaze' : 'FiberLink') + ' proposed coverage area. ' + area.notes + '</span>');
    layerSets.set(keyFor(area), { area: area, circle: circle, label: label });
  });

  items.forEach(function (item) {
    item.addEventListener('click', function () { focusArea(item); });
  });

  setProvider(activeProvider);
  fallback.style.display = 'none';
  window.setTimeout(function () { map.invalidateSize(); }, 0);
}());
