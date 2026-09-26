<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-WK3DFW4T");
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')</title>
    <meta name="description" content="@yield('meta_description', 'Premium limousine and luxury chauffeur services. Elegant, reliable, and safe transportation.')" />
    @php
        $metaKeywords = trim($__env->yieldContent('meta_keywords', $pageSeo['keywords'] ?? ''));
        $rawOg = trim($__env->yieldContent('og_image', asset('assets/img/home/hero.png')));
        $ogImageUrl = \App\Support\PageSeo::brandedOgPath($rawOg);
    @endphp
    @if($metaKeywords !== '')
        <meta name="keywords" content="{{ $metaKeywords }}" />
    @endif
    <link rel="canonical" href="{{ url()->current() }}" />
    @php
        $metaRobots = trim($__env->yieldContent('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'));
    @endphp
    <meta name="robots" content="{{ $metaRobots }}" />
    <meta name="googlebot" content="{{ $metaRobots }}" />
    <meta name="google-site-verification" content="0ofhTEJk68G98MZAdCK4Uamv7r8U-hbBpsqbpYZ8-bc" />
    <meta name="google-site-verification" content="rBD862xF-dflR6spqXLbrmc85oGgyhohOZB4l6oBgY8" />
    <meta property="og:title" content="@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')" />
    <meta property="og:description" content="@yield('meta_description', 'Premium limousine and luxury chauffeur services.')" />
    <meta property="og:image" content="{{ $ogImageUrl }}" />
    <meta property="og:image:alt" content="Alar Chauffeur Service" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:site_name" content="Alar Chauffeur Service" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:publisher" content="ALAR Chauffeur Service" />
    <meta property="og:see_also" content="https://www.facebook.com/profile.php?id=61581788001748" />
    <meta name="publisher" content="ALAR Chauffeur Service" />
    <meta property="article:publisher" content="https://www.facebook.com/profile.php?id=61581788001748" />
    <meta property="article:author" content="ALAR Chauffeur Service" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('meta_title', 'Alar Chauffeur Service | Luxury Transportation')" />
    <meta name="twitter:description" content="@yield('meta_description', 'Premium limousine and luxury chauffeur services.')" />
    <meta name="twitter:image" content="{{ $ogImageUrl }}" />
    <meta name="twitter:site" content="@Alar_chauffeur" />
    <meta name="twitter:creator" content="@Alar_chauffeur" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/fav-icon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/redesign.css') }}" />
    @include('components.structured-data')
    @stack('schema')
    @stack('head')
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18140135177"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag("js", new Date());
        gtag("config", "AW-18140135177");
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RDBXZZS40T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag("js", new Date());
        gtag("config", "G-RDBXZZS40T");
    </script>
</head>
<body class="alar-body">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK3DFW4T" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @unless(View::hasSection('hide_cta'))
        @include('components.cta-band')
    @endunless
    <a href="{{ config('contact.whatsapp_link') }}" class="alar-wa" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"><i class="fa fa-whatsapp"></i></a>
    <script src="{{ asset('assets/js/site.js') }}"></script>
    @stack('scripts')
</body>
</html>
