<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-WK3DFW4T");
        </script>
        <!-- End Google Tag Manager -->

        @php
            $pageSeo = \App\Support\PageSeo::current();
            $metaRobots = trim($__env->yieldContent('meta_robots')) ?: ($pageSeo['robots'] ?? 'index, follow');
            $metaKeywords = trim($__env->yieldContent('meta_keywords')) ?: ($pageSeo['keywords'] ?? '');
            $metaPublisher = trim($__env->yieldContent('meta_publisher')) ?: ($pageSeo['publisher'] ?? config('business.name', 'ALAR Chauffeur Service'));
        @endphp
        <meta charset="UTF-8" />
        <meta
            name="description"
            content="@yield('meta_description', config('app.name', 'Premium Limousine') . ' - Luxury Chauffeur & Limousine Services')"
        />
        @if($metaKeywords !== '')
        <meta name="keywords" content="{{ $metaKeywords }}" />
        @endif
        <meta name="robots" content="{{ $metaRobots }}" />
        <meta name="publisher" content="{{ $metaPublisher }}" />
        <meta name="author" content="{{ $metaPublisher }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="publisher" href="{{ config('business.url', 'https://alarchauffeurservice.com') }}" />
        <meta
            name="google-site-verification"
            content="0ofhTEJk68G98MZAdCK4Uamv7r8U-hbBpsqbpYZ8-bc"
        />
        <meta
            name="google-site-verification"
            content="rBD862xF-dflR6spqXLbrmc85oGgyhohOZB4l6oBgY8"
        />

        <!-- Open Graph Meta Tags -->
        <meta
            property="og:title"
            content="@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')"
        />
        <meta
            property="og:description"
            content="@yield('meta_description', 'Premium limousine and luxury chauffeur services. Providing elegant, reliable, and safe transportation.')"
        />
        <meta
            property="og:image"
            content="@yield('og_image', asset('assets/img/logo/logo.png'))"
        />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="@yield('og_type', 'website')" />
        <meta property="og:site_name" content="Alar Chauffeur Service" />

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')" />
        <meta name="twitter:description" content="@yield('meta_description', 'Premium limousine and luxury chauffeur services. Providing elegant, reliable, and safe transportation.')" />
        <meta name="twitter:image" content="@yield('og_image', asset('assets/img/logo/logo.png'))" />

        <title>@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')</title>
        <!-- Favicon -->
        <link
            rel="icon"
            type="image/png"
            href="{{ asset('assets/img/logo/fav-icon.png') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/bootstrap.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/classy-nav.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/font-awesome.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/owl.carousel.min.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/custom-override.css') }}"
        />
        @include('components.structured-data')
        @stack('schema')
        @stack('head')

        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=AW-18140135177"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "AW-18140135177");
        </script>

        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-RDBXZZS40T"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-RDBXZZS40T");
        </script>

        <!-- Ahrefs Analytics -->
        <script
            src="https://analytics.ahrefs.com/analytics.js"
            data-key="/tlRcYFi9ReMz8uOTffEnQ"
            async
        ></script>

        <script>
    !function(t,e){var o,n,p,r;e.__SV||(window.posthog && window.posthog.__loaded)||(window.posthog=e,e._i=[],e.init=function(i,s,a){function g(t,e){var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}p||((p=t.createElement("script")).type="text/javascript",p.crossOrigin="anonymous",p.async=!0,p.src=s.api_host.replace(".i.posthog.com","-assets.i.posthog.com")+"/static/array.js",p.onerror=function(){p=null},(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r));var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],Object.defineProperty(u,"toString",{configurable:!0,enumerable:!0,writable:!0,value:function(t){var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e}}),Object.defineProperty(u.people,"toString",{configurable:!0,enumerable:!0,writable:!0,value:function(){return u.toString(1)+".people (stub)"}}),o="Zc Kc Xc Yc ih init Rh Ah Ih Eh Lh zu Ph Nh $h Uh Wh Vh Gh Qh Zh capture getExtension Fh dr Yh calculateEventProperties Kh register register_once register_for_session unregister unregister_for_session sd Th td getFeatureFlag getFeatureFlagPayload getFeatureFlagResult getAllFeatureFlags isFeatureEnabled reloadFeatureFlags updateFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSurveysLoaded onSessionId getSurveys getActiveMatchingSurveys onActiveMatchingSurveysChanged renderSurvey displaySurvey cancelPendingSurvey canRenderSurvey canRenderSurveyAsync rd identify setPersonProperties unsetPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset od shutdown setIdentity clearIdentity get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException addExceptionStep captureLog startExceptionAutocapture stopExceptionAutocapture loadToolbar get_property getSessionProperty ed Bh createPersonProfile setInternalOrTestUser nd oh sh opt_in_capturing opt_out_capturing rh has_opted_in_capturing has_opted_out_capturing get_explicit_consent_status is_capturing clear_opt_in_out_capturing qh debug Hu Os getPageViewId captureTraceFeedback captureTraceMetric wh".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])},e.__SV=1)}(document,window.posthog||[]);
    posthog.init('phc_xTWzPnuQtBLnXm5cYwJd8zKJdhHeb6yybvtQgFagG7Ny', {
        api_host: 'https://us.i.posthog.com',
        defaults: '2026-05-30',
        person_profiles: 'identified_only', // or 'always' to create profiles for anonymous users as well
    })
</script>
        
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-WK3DFW4T"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('components.header') @yield('content')
        @include('components.footer')

        <!-- Scripts -->
        <script src="{{
                asset('assets/js/jquery/jquery-2.2.4.min.js')
            }}"></script>
        <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
        <script src="{{
                asset('assets/js/bootstrap/bootstrap.min.js')
            }}"></script>
        <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/active.js') }}"></script>
        <script src="{{ asset('assets/js/vaultedge.js') }}"></script>
        <script src="{{ asset('assets/js/booking-engage.js') }}"></script>
        @stack('scripts')

        <!-- WhatsApp Floating Button -->
        <a
            href="{{ config('contact.whatsapp_link') }}"
            class="ve-whatsapp-float"
            target="_blank"
            aria-label="Chat on WhatsApp"
        >
            <i class="fa fa-whatsapp"></i>
        </a>
    </body>
</html>
