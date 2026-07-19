window.addEventListener('load', function () {
    var loader = document.getElementById('pageLoader');
    if (loader) loader.classList.add('is-loaded');
});

document.addEventListener('DOMContentLoaded', function () {
    var megaParent = document.querySelector('.mega-dropdown');
    var megaToggleBtn = document.querySelector('.mega-toggle-btn');

    if (megaParent && megaToggleBtn) {
        megaToggleBtn.addEventListener('click', function () {
            var isOpen = megaParent.classList.toggle('show-mega');
            megaToggleBtn.setAttribute('aria-expanded', isOpen);
        });
    }

    // Desktop hover-intent: the trigger link and the full-width panel below it
    // aren't visually adjacent, so a plain CSS :hover drops out during the
    // brief cursor transit between them. A short close-delay bridges that gap
    // without needing pixel-perfect geometry.
    if (megaParent) {
        var closeTimer = null;

        megaParent.addEventListener('mouseenter', function () {
            if (window.innerWidth < 992) return;
            clearTimeout(closeTimer);
            megaParent.classList.add('show-mega');
        });

        megaParent.addEventListener('mouseleave', function () {
            if (window.innerWidth < 992) return;
            closeTimer = setTimeout(function () {
                megaParent.classList.remove('show-mega');
            }, 250);
        });
    }

    // Reveal [data-animate] elements on load (if already in view) and on
    // scroll (as they enter the viewport) via a single IntersectionObserver.
    var animatedEls = document.querySelectorAll('[data-animate]');
    animatedEls.forEach(function (el) {
        var delay = el.getAttribute('data-delay');
        if (delay) el.style.setProperty('--reveal-delay', delay + 'ms');
    });

    if ('IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        animatedEls.forEach(function (el) { revealObserver.observe(el); });
    } else {
        animatedEls.forEach(function (el) { el.classList.add('in-view'); });
    }

    // Shrink the header logo once the page has scrolled a bit.
    var siteHeader = document.querySelector('.site-header');
    if (siteHeader) {
        var applyScrolledState = function () {
            siteHeader.classList.toggle('scrolled', window.scrollY > 20);
        };
        applyScrolledState();
        window.addEventListener('scroll', applyScrolledState, { passive: true });
    }

    // Back-to-top button: show once scrolled past the fold, scroll smoothly on click.
    var backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        var toggleBackToTop = function () {
            backToTopBtn.classList.toggle('is-visible', window.scrollY > 500);
        };
        toggleBackToTop();
        window.addEventListener('scroll', toggleBackToTop, { passive: true });

        backToTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Auto-playing, responsive "Recent Projects" carousel.
    var projectsSwiperEl = document.querySelector('.projects-swiper');
    if (projectsSwiperEl && window.Swiper) {
        new Swiper('.projects-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 20,
            loop: true,
            autoplay: { delay: 2800, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: '.projects-swiper .swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.projects-swiper .swiper-button-next',
                prevEl: '.projects-swiper .swiper-button-prev'
            },
            breakpoints: {
                576: { slidesPerView: 2, spaceBetween: 20 },
                992: { slidesPerView: 3, spaceBetween: 24 },
                1200: { slidesPerView: 4, spaceBetween: 28 }
            }
        });
    }

    // Auto-playing, responsive testimonials carousel.
    var testimonialsSwiperEl = document.querySelector('.testimonials-swiper');
    if (testimonialsSwiperEl && window.Swiper) {
        new Swiper('.testimonials-swiper', {
            slidesPerView: 1.1,
            spaceBetween: 20,
            loop: true,
            autoplay: { delay: 3200, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: '.testimonials-swiper .swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.testimonials-swiper .swiper-button-next',
                prevEl: '.testimonials-swiper .swiper-button-prev'
            },
            breakpoints: {
                768: { slidesPerView: 2, spaceBetween: 24 },
                1200: { slidesPerView: 3, spaceBetween: 28 }
            }
        });
    }

    // Collapse the mobile nav after a link is picked, and reset the mega menu state.
    var mainNav = document.getElementById('mainNav');
    if (mainNav && window.bootstrap) {
        var bsCollapse = bootstrap.Collapse.getOrCreateInstance(mainNav, { toggle: false });

        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth < 992) {
                    bsCollapse.hide();
                    if (megaParent) {
                        megaParent.classList.remove('show-mega');
                        megaToggleBtn.setAttribute('aria-expanded', false);
                    }
                }
            });
        });
    }
});
