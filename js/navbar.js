// navbar.js
export function setupNavbarCollapse() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarToggle = document.querySelector('.navbar-toggler');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (!navbarToggle.classList.contains('collapsed')) {
                navbarToggle.click(); // This will trigger the collapse toggle
            }
        });
    });
}
