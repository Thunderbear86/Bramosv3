// sticky.js
export function makeNavbarSticky() {
    const navbar = document.querySelector('.navbar');
    const sticky = navbar.offsetTop;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("fixed-top");
        } else {
            navbar.classList.remove("fixed-top");
        }
    });
}
