window.onload = function() {
    // Loader
    toggleShowMode(document.getElementById('loader'));
    // Menu
    showMenu();
}

// Search box
var searchBoxTransmitter = document.getElementById("searchBoxTransmitter");
var searchBox = document.getElementById("searchBox");
var closeSearchBoxBtn = document.getElementById("closeSearchBox");
searchBoxTransmitter.onclick = function() { toggleShowMode(searchBox) };
closeSearchBoxBtn.onclick = function() { toggleShowMode(searchBox) };

// Menu
window.addEventListener("resize", function() { showMenu() });

function showMenu() {
    var menuTransmitter = document.getElementById("menuTransmitter");
    var menu = document.getElementById("pageMenu");
    var deviceWidth = window.innerWidth;
    if (deviceWidth <= 420) {
        toggleShowMode(menuTransmitter);
        toggleShowMode(menu);
        menuTransmitter.addEventListener("click", function() { toggleShowMode(menu) });
    } else {
        menuTransmitter.classList.add("hidden");
    }
}

// Toggle elements show mode
function toggleShowMode(elem) {
    elem.classList.toggle('hidden')
}