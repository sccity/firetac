document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('map').setView([37.144360, -113.486896], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    document.querySelectorAll('#callsTable tbody tr').forEach(row => {
        const lat = parseFloat(row.getAttribute('data-lat'));
        const lng = parseFloat(row.getAttribute('data-lng'));

        // Only add marker if lat/lng are valid
        if (!isNaN(lat) && !isNaN(lng)) {
            L.marker([lat, lng]).addTo(map);
        }
    });

    function adjustMapHeight() {
        const mapContainer = document.getElementById('map');
        const header = document.querySelector('header');
        const footer = document.querySelector('footer');

        if (mapContainer && header && footer) {
            const headerHeight = header.offsetHeight || 0;
            const footerHeight = footer.offsetHeight || 0;
            const containerMargin = 16;

            mapContainer.style.height = `${window.innerHeight - headerHeight - footerHeight - containerMargin}px`;
        }
    }

    window.addEventListener('resize', adjustMapHeight);
    adjustMapHeight();
});
