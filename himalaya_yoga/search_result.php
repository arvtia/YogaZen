<?php include "header.php" ?>


<div class="row mt-5  py-5">
        <div class="col-md-8 col-sm-4 mx-auto pt-5 lh-lg px-4 ">
            <div class="small fw-light fs-4">Search here for...</div>
            <div class="input-group">
            <input type="text" id="searchBox" placeholder="Search..." onkeyup="searchFunction()" class="py-2 w-75 justify-content-center align-items-center">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                        <img src="assests/images/search-icon.svg" alt="search_icon">
                    </button>
                </span>
            </div>
        </div>
    </div>

<!--search result-->
<div class="container-fluid py-5 mx-auto w-100 px-5" >


<div id="searchResults"></div>

<div id="pagination"></div>
</div>


<script>
function searchFunction() {
    let query = document.getElementById('searchBox').value;
    if (query.length < 2) return; // Prevent searching for single letters

    fetch(`search.php?q=${query}`)
        .then(response => response.json())
        .then(data => displayResults(data));
}

let currentPage = 1;
const resultsPerPage = 5;

function displayResults(results) {
    let resultDiv = document.getElementById("searchResults");
    let paginationDiv = document.getElementById("pagination");
    resultDiv.innerHTML = "";
    paginationDiv.innerHTML = "";

    if (results.length === 0) {
        resultDiv.innerHTML = "<p>No results found.</p>";
        return;
    }

    let totalPages = Math.ceil(results.length / resultsPerPage);
    let start = (currentPage - 1) * resultsPerPage;
    let end = start + resultsPerPage;
    let paginatedResults = results.slice(start, end);

    paginatedResults.forEach(result => {
        resultDiv.innerHTML += `<p><a href="${result.url}">${result.title}</a> - ${result.content.substring(0, 100)}...</p>`;
    });

    for (let i = 1; i <= totalPages; i++) {
        paginationDiv.innerHTML += `<button onclick="goToPage(${i})">${i}</button>`;
    }
}

function goToPage(page) {
    currentPage = page;
    searchFunction(); 
}
</script>




<?php include "footer.php" ?>