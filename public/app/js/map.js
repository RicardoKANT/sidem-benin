const mapboxTokenMeta = document.querySelector('meta[name="mapbox-access-token"]');
const mapboxAccessToken = mapboxTokenMeta ? mapboxTokenMeta.content.trim() : '';
const mapCenter = [-0.108968, 51.492933];
const mapFeatures = [
    {
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: mapCenter,
        },
    },
];

function initializeMap(containerId) {
    if (!document.getElementById(containerId) || !mapboxAccessToken || typeof mapboxgl === 'undefined') {
        return;
    }

    mapboxgl.accessToken = mapboxAccessToken;

    const map = new mapboxgl.Map({
        container: containerId,
        style: 'mapbox://styles/mapbox/light-v11',
        center: mapCenter,
        zoom: 14,
    });

    for (const feature of mapFeatures) {
        const el = document.createElement('div');
        el.className = 'marker';

        new mapboxgl.Marker(el).setLngLat(feature.geometry.coordinates).addTo(map);
    }
}

initializeMap('map');
initializeMap('map2');
initializeMap('map3');
