export function initMobileMenu() {
    const toggleBtn = document.querySelector('.mobile-menu-toggle');
    const closeBtn = document.querySelector('.mobile-menu-close');
    const overlay = document.querySelector('.mobile-menu-overlay');

    if (!toggleBtn || !closeBtn || !overlay) {
        return; // Elements not present on page
    }

    const openMenu = () => {
        document.body.classList.add('mobile-menu-open');
        toggleBtn.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
        document.body.classList.remove('mobile-menu-open');
        toggleBtn.setAttribute('aria-expanded', 'false');
    };

    // Event listeners
    toggleBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    // Close menu on ESC key press
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && document.body.classList.contains('mobile-menu-open')) {
            closeMenu();
        }
    });
}
