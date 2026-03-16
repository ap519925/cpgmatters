/**
 * Mobile Menu System
 * 
 * Two independent menu systems:
 * 1. LEFT-SIDE TOPICS FLYOUT — triggered by the floating .mobile-menu-toggle
 * 2. MOBILE NAV DRAWER — triggered by .mobile-nav-hamburger in the header
 */

// ── 1. Original Left-Side Topics Flyout ──
function initTopicsFlyout() {
    const toggleBtn = document.querySelector('.mobile-menu-toggle');
    const closeBtn = document.querySelector('.mobile-menu-close');
    const overlay = document.querySelector('.mobile-menu-overlay');

    if (!toggleBtn || !closeBtn || !overlay) {
        return;
    }

    const openMenu = () => {
        document.body.classList.add('mobile-menu-open');
        toggleBtn.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
        document.body.classList.remove('mobile-menu-open');
        toggleBtn.setAttribute('aria-expanded', 'false');
    };

    toggleBtn.addEventListener('click', () => {
        if (document.body.classList.contains('mobile-menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && document.body.classList.contains('mobile-menu-open')) {
            closeMenu();
        }
    });
}

// ── 2. New Mobile Nav Drawer ──
function initMobileNavDrawer() {
    const hamburger = document.querySelector('.mobile-nav-hamburger');
    const closeBtn = document.querySelector('.mobile-nav-drawer__close');
    const overlay = document.querySelector('.mobile-nav-overlay');
    const drawer = document.querySelector('.mobile-nav-drawer');

    if (!hamburger || !drawer) {
        return;
    }

    // Gather all animated items inside the drawer for staggered entrance
    const getAnimItems = () => drawer.querySelectorAll('.mobile-nav-list__item, .mobile-nav-drawer__search, .mobile-nav-drawer__cta');

    const openDrawer = () => {
        document.body.classList.add('mobile-nav-open');
        hamburger.setAttribute('aria-expanded', 'true');

        // Staggered entrance animation
        const items = getAnimItems();
        items.forEach((item, i) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(25px)';
            item.style.transition = 'none';

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    item.style.transition = `opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1) ${i * 0.06}s, transform 0.4s cubic-bezier(0.16, 1, 0.3, 1) ${i * 0.06}s`;
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                });
            });
        });
    };

    const closeDrawer = () => {
        // Quick fade out
        const items = getAnimItems();
        items.forEach((item) => {
            item.style.transition = 'opacity 0.12s ease, transform 0.12s ease';
            item.style.opacity = '0';
            item.style.transform = 'translateX(15px)';
        });

        setTimeout(() => {
            document.body.classList.remove('mobile-nav-open');
            hamburger.setAttribute('aria-expanded', 'false');
        }, 100);
    };

    hamburger.addEventListener('click', () => {
        if (document.body.classList.contains('mobile-nav-open')) {
            closeDrawer();
        } else {
            openDrawer();
        }
    });
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);

    // Close on ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && document.body.classList.contains('mobile-nav-open')) {
            closeDrawer();
        }
    });

    // Active link highlighting
    const currentPath = window.location.pathname;
    drawer.querySelectorAll('.mobile-nav-list__link').forEach((link) => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('is-active');
        }
    });
}

// ── Export combined init ──
export function initMobileMenu() {
    initTopicsFlyout();
    initMobileNavDrawer();
}
