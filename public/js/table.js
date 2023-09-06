document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    const entriesSelect = document.getElementById("entries");
    const showingInfo = document.getElementById("showing-info");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");
    const tableRows = document.querySelectorAll("tbody tr");

    let currentPage = 1;
    let entriesPerPage = parseInt(entriesSelect.value);

    function updateShowingInfo() {
        const totalEntries = tableRows.length;
        const startIndex = (currentPage - 1) * entriesPerPage + 1;
        const endIndex = Math.min(currentPage * entriesPerPage, totalEntries);

        showingInfo.innerText = `Showing ${startIndex} to ${endIndex} of ${totalEntries} entries`;
    }

    function updateTableDisplay() {
        const startIndex = (currentPage - 1) * entriesPerPage;
        const endIndex = currentPage * entriesPerPage;

        tableRows.forEach((row, index) => {
            if (index >= startIndex && index < endIndex) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });

        updateShowingInfo();
    }

    // Initial table setup
    updateTableDisplay();

    // Search functionality
    searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value.toLowerCase();

        tableRows.forEach((row) => {
            const rowData = Array.from(row.children).map((cell) =>
                cell.textContent.toLowerCase()
            );

            if (rowData.some((data) => data.includes(searchTerm))) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });

        currentPage = 1;
        updateTableDisplay();
    });

    // Entries per page selection
    entriesSelect.addEventListener("change", function () {
        entriesPerPage = parseInt(entriesSelect.value);
        currentPage = 1;
        updateTableDisplay();
    });

    // Previous button
    prevButton.addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            updateTableDisplay();
        }
    });

    // Next button
    nextButton.addEventListener("click", function () {
        const totalEntries = tableRows.length;
        const maxPages = Math.ceil(totalEntries / entriesPerPage);

        if (currentPage < maxPages) {
            currentPage++;
            updateTableDisplay();
        }
    });
});
