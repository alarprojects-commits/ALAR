// VaultEdge Custom JS

// Sticky navbar on scroll
window.addEventListener('scroll', function() {
    var header = document.getElementById('ve-sticky');
    if (header) {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
});

// Mobile menu toggle
var toggler = document.getElementById('ve-toggle');
var mobileMenu = document.getElementById('ve-mobile-menu');
var mobileClose = document.getElementById('ve-mobile-close');

if (toggler && mobileMenu) {
    toggler.addEventListener('click', function() {
        mobileMenu.classList.add('open');
    });
}

if (mobileClose && mobileMenu) {
    mobileClose.addEventListener('click', function() {
        mobileMenu.classList.remove('open');
    });
}

document.querySelectorAll('.ve-mobile-accordion-toggle').forEach(function(toggle) {
    toggle.addEventListener('click', function() {
        var accordion = this.closest('.ve-mobile-accordion');
        var isOpen = accordion.classList.contains('open');

        accordion.classList.toggle('open', !isOpen);
        this.setAttribute('aria-expanded', String(!isOpen));
    });
});

// Counter animation
function animateCounters() {
    var counters = document.querySelectorAll('.counter');
    counters.forEach(function(counter) {
        var target = parseInt(counter.getAttribute('data-count'));
        var count = 0;
        var duration = 2000;
        var step = target / (duration / 16);
        var timer = setInterval(function() {
            count += step;
            if (count >= target) {
                counter.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(count).toLocaleString();
            }
        }, 16);
    });
}

// Trigger counters when in view
var counterSection = document.querySelector('.ve-counter-section');
if (counterSection) {
    var triggered = false;
    var observer = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting && !triggered) {
            triggered = true;
            animateCounters();
        }
    }, { threshold: 0.3 });
    observer.observe(counterSection);
}

// FAQ accordion toggle
document.querySelectorAll('.ve-faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
        var item = this.closest('.ve-faq-item');
        var wasOpen = item.classList.contains('open');
        document.querySelectorAll('.ve-faq-item').forEach(function(i) { i.classList.remove('open'); });
        if (!wasOpen) item.classList.add('open');
    });
});
