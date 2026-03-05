document.addEventListener('DOMContentLoaded', () => {
    // ── Navigáció scroll hatás ──
    const nav = document.getElementById('mainNav');
    if (nav) {
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 30);
        });
    }

    // ── Hamburger menü ──
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileClose = document.getElementById('mobileClose');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            mobileMenu.dataset.open = '';
        });
        if (mobileClose) {
            mobileClose.addEventListener('click', () => {
                delete mobileMenu.dataset.open;
            });
        }
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                delete mobileMenu.dataset.open;
            });
        });
    }

    // ── Scroll to top gomb ──
    const scrollBtn = document.getElementById('scrollTop');
    if (scrollBtn) {
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('visible', window.scrollY > 500);
        });
        scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // ── Árlista tabváltás ──
    document.querySelectorAll('.price-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const tabId = tab.dataset.tab;

            document.querySelectorAll('.price-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.price-panel').forEach(p => p.classList.remove('active'));

            tab.classList.add('active');
            const panel = document.getElementById('panel-' + tabId);
            if (panel) {
                panel.classList.add('active');
            }
        });
    });
});

// ── GSAP animációk (betöltés után) ──
window.addEventListener('load', () => {
    if (typeof gsap === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // Hero szöveg megjelenés
    const heroItems = document.querySelectorAll('.hero .reveal');
    gsap.fromTo(heroItems,
        { y: 40, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.9, stagger: 0.15, ease: 'power3.out', delay: 0.3 }
    );

    // Hero vizuál
    gsap.fromTo('.reveal-scale',
        { scale: 0.88, opacity: 0 },
        { scale: 1, opacity: 1, duration: 1.1, ease: 'power3.out', delay: 0.5 }
    );

    // Float card animáció
    gsap.fromTo('.hero-float-card',
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: 'back.out(1.7)', delay: 1 }
    );

    // Bemutatkozás — bal/jobb
    gsap.fromTo('.reveal-left',
        { x: -50, opacity: 0 },
        { x: 0, opacity: 1, duration: 0.9, ease: 'power3.out', stagger: 0.1, scrollTrigger: { trigger: '#bemutatkozas', start: 'top 80%' } }
    );
    gsap.fromTo('.reveal-right',
        { x: 50, opacity: 0 },
        { x: 0, opacity: 1, duration: 0.9, ease: 'power3.out', stagger: 0.1, scrollTrigger: { trigger: '#bemutatkozas', start: 'top 80%' } }
    );

    // Kártyák — staggered reveal
    ['#alapGrid', '#gepiGrid'].forEach(gridId => {
        const grid = document.querySelector(gridId);
        if (!grid) return;
        gsap.fromTo(grid.querySelectorAll('.treatment-card'),
            { y: 60, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.7, stagger: 0.12, ease: 'power3.out', scrollTrigger: { trigger: grid, start: 'top 85%' } }
        );
    });

    // Termékek kártyák
    gsap.fromTo('.products-grid .product-card',
        { y: 40, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: 'power3.out', scrollTrigger: { trigger: '.products-grid', start: 'top 80%' } }
    );

    // Árlista
    gsap.fromTo('.price-tabs, .price-panel, .price-premium',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, stagger: 0.1, ease: 'power3.out', scrollTrigger: { trigger: '#arak', start: 'top 80%' } }
    );

    // Elérhetőség szekció
    gsap.fromTo('#elerhetosegek .contact-item',
        { x: -30, opacity: 0 },
        { x: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: 'power3.out', scrollTrigger: { trigger: '#elerhetosegek', start: 'top 80%' } }
    );

    // Section label-ek és title-ok
    document.querySelectorAll('.section-label, .section-title, .section-subtitle').forEach(el => {
        if (!el.closest('.hero')) {
            gsap.fromTo(el,
                { y: 25, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.7, ease: 'power3.out', scrollTrigger: { trigger: el, start: 'top 88%' } }
            );
        }
    });

    // Cert counter
    const certStrong = document.querySelector('.about-cert strong');
    if (certStrong) {
        gsap.from(certStrong, {
            innerText: 2015,
            duration: 2,
            ease: 'power2.out',
            snap: { innerText: 1 },
            scrollTrigger: {
                trigger: '.about-cert',
                start: 'top 85%',
            }
        });
    }
});
