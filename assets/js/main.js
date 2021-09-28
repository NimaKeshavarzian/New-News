window.onload = function() {
    // Loader
    toggleShowMode(document.getElementById('loader'));
}

// Search box
var searchBoxTransmitter = document.getElementById("searchBoxTransmitter");
var searchBox = document.getElementById("searchBox");
var closeSearchBoxBtn = document.getElementById("closeSearchBox");
searchBoxTransmitter.onclick = function() { toggleShowMode(searchBox) };
closeSearchBoxBtn.onclick = function() { toggleShowMode(searchBox) };

// Toggle elements show mode
function toggleShowMode(elem) {
    elem.classList.toggle('hidden')
}