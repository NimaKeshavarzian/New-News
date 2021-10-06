window.onload = function() {
    // Loader
    toggleShowMode(document.getElementById('loader'));
    // Menu
    showMenu();
    // Remove system categories
    removeSystemCategories(document.querySelectorAll('.widget *'), "slider post");
}

// Search box
var searchBoxTransmitter = document.getElementById("searchBoxTransmitter");
var searchBox = document.getElementById("searchBox");
var closeSearchBoxBtn = document.getElementById("closeSearchBox");
searchBoxTransmitter.onclick = function() { toggleShowMode(searchBox) };
closeSearchBoxBtn.onclick = function() { toggleShowMode(searchBox) };

// Menu
window.onresize = function() { showMenu(); }

function showMenu() {
    var menuTransmitter = document.getElementById("menuTransmitter");
    var menu = document.getElementById("pageMenu");
    var deviceWidth = window.innerWidth;
    if (deviceWidth <= 600) {
        toggleShowMode(menuTransmitter);
        toggleShowMode(menu);
        menuTransmitter.addEventListener("click", function() { toggleShowMode(menu) });
    } else {
        menuTransmitter.classList.add("hidden");
    }
}

function removeSystemCategories(elements, category) {
    elements.forEach(function(elem) {
        if (elem.textContent == category) toggleShowMode(elem.parentNode);
    });
}

// Toggle elements show mode
function toggleShowMode(elem) {
    elem.classList.toggle('hidden')
}