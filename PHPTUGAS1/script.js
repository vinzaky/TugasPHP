// Fungsi Smooth Scroll
document.addEventListener("DOMContentLoaded", function() {
    var scrollLinks = document.querySelectorAll('.back-to-top a');

    for (var i = 0; i < scrollLinks.length; i++) {
        scrollLinks[i].addEventListener('click', smoothScroll);
    }

    function smoothScroll(e) {
        e.preventDefault();
        var targetId = this.getAttribute('href');
        var targetPosition = document.querySelector(targetId).offsetTop;
        var distance = targetPosition - startPosition;
        var duration = 1000;
        var start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            var progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
        }

        window.requestAnimationFrame(step);
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t*t + b;
        t -= 2;
        return c/2*(t*t*t + 2) + b;
    }
});
