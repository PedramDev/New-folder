document.querySelectorAll('.rayabit-scroll-to').forEach(function(element) {
    element.addEventListener('click', function() {
        window.location.hash = '#rayabit-scroll-to';
    });
});

window.onload = function() {
    if (window.location.hash.includes('#rayabit-scroll-to')) {
        var element = document.querySelector('.rayabit-scroll-to');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }
};
