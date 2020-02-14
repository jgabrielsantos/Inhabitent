(function() {
    let searchIcon = document.getElementById('search-toggle');
    searchIcon.onclick = function(event) {
        event.preventDefault();
        let searchForm = document.getElementById('search-form');
        if ( document.querySelector('.hide-search') ) {
            searchForm.classList.remove("hide-search");
            searchForm.classList.add("display-search");
        } else {
            searchForm.classList.remove("display-search");
            searchForm.classList.add("hide-search");
        }
    };

}());