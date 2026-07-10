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

        <meta charset="UTF-8" />
        <meta
            name="description"
            content="@yield('meta_description', config('app.name', 'Premium Limousine') . ' - Luxury Chauffeur & Limousine Services')"
        />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta
            name="google-site-verification"
            content="0ofhTEJk68G98MZAdCK4Uamv7r8U-hbBpsqbpYZ8-bc"
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
            content="{{ asset('assets/img/logo/logo.png') }}"
        />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />

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
        @stack('schema') @stack('head')

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
