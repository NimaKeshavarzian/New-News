window.onload = function() {
    // Loader
    toggleShowMode(document.getElementById('loader'));
}

// Toggle elements show mode
function toggleShowMode(elem) {
    elem.classList.toggle('hidden')
}