(function() {
    let searchIcon = document.getElementById('search-toggle');
    console.log(searchIcon);

    searchIcon.onclick = function(event) {
        event.preventDefault();
        let searchForm = document.getElementById('search-form');
        if ( document.querySelector('.hide-search') ) {
            searchForm.classList.remove("hide-search");
            searchForm.classList.add("display-search");
        } else {
            console.log('teste22');
            searchForm.classList.remove("display-search");
            searchForm.classList.add("hide-search");
        }
    };

}());