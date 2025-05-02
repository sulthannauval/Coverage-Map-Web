const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('live-search');
    const resultsBody = document.getElementById('search-results');
    const paginationLinks = document.getElementById('pagination-links');

    let currentQuery = '';
    let currentPage = 1;

    function fetchResults(query = '', page = 1) {
        fetch(`/adminsearch?query=${encodeURIComponent(query)}&page=${page}`)
            .then(response => response.json())
            .then(data => {
                let rows = '';
                const offset = (data.current_page - 1) * data.per_page;

                data.data.forEach((item, index) => {
                    rows += `
                        <tr>
                            <td>${offset + index + 1}</td>
                            <td>${item.nama_pemancar}</td>
                            <td>${item.provinsi}</td>
                            <td>${item.latitude}</td>
                            <td>${item.longitude}</td>
                        </tr>
                    `;
                });

                resultsBody.innerHTML = rows;
                paginationLinks.innerHTML = data.links;

                // Bind ulang pagination link agar fetch AJAX lagi
                document.querySelectorAll('#pagination-links a').forEach(link => {
                    link.addEventListener('click', function (e) {
                        e.preventDefault();
                        const url = new URL(this.href);
                        const page = url.searchParams.get('page');
                        fetchResults(currentQuery, page);
                    });
                });
            });
    }

    input.addEventListener('input', function () {
        currentQuery = this.value;
        currentPage = 1;
        fetchResults(currentQuery, currentPage);
    });

    // Optional: fetch first time
    // fetchResults();
});