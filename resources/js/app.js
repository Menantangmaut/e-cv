const toggle = document.querySelector('[data-nav-toggle]');
const links = document.querySelector('[data-nav-links]');
const header = toggle?.closest('.site-header');

if (toggle && links && header) {
    document.body.classList.add('nav-enhanced');

    const closeMenu = () => {
        toggle.setAttribute('aria-expanded', 'false');
        links.classList.remove('is-open');
        header.classList.remove('is-menu-open');
    };

    toggle.addEventListener('click', () => {
        const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

        toggle.setAttribute('aria-expanded', String(!isExpanded));
        links.classList.toggle('is-open', !isExpanded);
        header.classList.toggle('is-menu-open', !isExpanded);
    });

    links.addEventListener('click', (event) => {
        if (event.target instanceof Element && event.target.closest('a')) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            closeMenu();
            toggle.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 700) {
            closeMenu();
        }
    });
}
