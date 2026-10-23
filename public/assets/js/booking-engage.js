/**
 * GA4 / GTM engagement helpers for bounce-rate reduction.
 * Events: start_booking, click_free_quote, click_to_call, select_trip_type,
 * view_fleet, view_reviews, view_service
 *
 * Recheck in GA4 after deploy: Reports → Engagement → Events (or Pages and screens).
 * Compare Book Online bounce / engaged sessions over ~14 days.
 */
(function () {
    'use strict';

    function pushEngage(eventName, label) {
        var payload = { event: eventName };
        if (label) {
            payload.engage_label = label;
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push(payload);

        if (typeof window.gtag === 'function') {
            window.gtag('event', eventName, {
                event_category: 'engagement',
                event_label: label || eventName,
            });
        }
    }

    document.addEventListener('click', function (event) {
        var target = event.target.closest('[data-engage]');
        if (!target) {
            return;
        }

        pushEngage(
            target.getAttribute('data-engage'),
            target.getAttribute('data-engage-label') || target.textContent.trim().slice(0, 80)
        );
    });

    var iframeWrap = document.querySelector('[data-booking-iframe]');
    if (!iframeWrap) {
        return;
    }

    var iframe = iframeWrap.querySelector('iframe');
    var loader = iframeWrap.querySelector('[data-booking-loader]');
    if (!iframe) {
        return;
    }

    function hideLoader() {
        if (loader) {
            loader.classList.add('is-hidden');
        }
        iframeWrap.classList.add('is-loaded');
    }

    iframe.addEventListener('load', hideLoader);
    window.setTimeout(hideLoader, 8000);
})();
