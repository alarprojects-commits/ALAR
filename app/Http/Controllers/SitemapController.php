<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $sitemaps = [
            ['loc' => route('sitemap.main-pages'), 'lastmod' => $this->latestLastmod([
                'index', 'about-us', 'our-services', 'our-fleet', 'contact-us', 'privacy-policy', 'blog', 'book-online', 'free-quote',
            ])],
            ['loc' => route('sitemap.services'), 'lastmod' => $this->latestLastmod([
                'services.airport-transportation',
                'services.corporate-transportation',
                'services.wedding-limo',
                'services.prom-limo',
                'services.sporting-events',
                'services.group-transportation',
                'services.concert-festival',
                'services.party-bus',
                'services.cruise-port-transfers',
                'services.chauffeur-service',
                'services.hourly-limo',
            ])],
            ['loc' => route('sitemap.service-areas'), 'lastmod' => $this->latestLastmod([
                'service-areas.index',
                'service-areas.new-jersey',
                'service-areas.new-york',
                'service-areas.connecticut',
                'service-areas.pennsylvania',
                'service-areas.california',
                'service-areas.nevada',
                'service-areas.washington',
            ])],
            ['loc' => route('sitemap.airports'), 'lastmod' => $this->latestLastmod([
                'airports.index',
                'airports.jfk',
                'airports.lga',
                'airports.ewr',
                'airports.hpn',
                'airports.teb',
                'airports.phl',
                'airports.bdl',
                'airports.lax',
                'airports.las',
                'airports.sea',
            ])],
            ['loc' => route('sitemap.blogs'), 'lastmod' => $this->latestLastmod([
                'blogs.new-york-car-service-jfk-lga-ewr-tri-state',
                'blogs.chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc',
                'blogs.car-service-to-jfk-from-manhattan',
                'blogs.newark-airport-car-service-ewr',
                'blogs.black-car-service-nyc-vs-uber-taxi',
            ])],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($sitemaps as $sitemap) {
            $xml .= "    <sitemap>\n";
            $xml .= '        <loc>'.e($sitemap['loc'])."</loc>\n";
            $xml .= '        <lastmod>'.e($sitemap['lastmod'])."</lastmod>\n";
            $xml .= "    </sitemap>\n";
        }

        $xml .= '</sitemapindex>';

        return $this->xml($xml);
    }

    public function mainPages(): Response
    {
        return $this->urlset([
            $this->page('home', 'index', 'weekly', '1.0'),
            $this->page('about-us', 'about-us', 'monthly', '0.8'),
            $this->page('our-services', 'our-services', 'weekly', '0.9'),
            $this->page('our-fleet', 'our-fleet', 'monthly', '0.8'),
            $this->page('blog', 'blog', 'weekly', '0.8'),
            $this->page('book-online', 'book-online', 'monthly', '0.9'),
            $this->page('free-quote', 'free-quote', 'monthly', '0.8'),
            $this->page('contact-us', 'contact-us', 'monthly', '0.7'),
            $this->page('privacy-policy', 'privacy-policy', 'yearly', '0.3'),
        ]);
    }

    public function services(): Response
    {
        return $this->urlset([
            $this->page('services.airport-transportation', 'services.airport-transportation', 'monthly', '0.8'),
            $this->page('services.corporate-transportation', 'services.corporate-transportation', 'monthly', '0.8'),
            $this->page('services.wedding-limo', 'services.wedding-limo', 'monthly', '0.8'),
            $this->page('services.prom-limo', 'services.prom-limo', 'monthly', '0.7'),
            $this->page('services.sporting-events', 'services.sporting-events', 'monthly', '0.7'),
            $this->page('services.group-transportation', 'services.group-transportation', 'monthly', '0.7'),
            $this->page('services.concert-festival', 'services.concert-festival', 'monthly', '0.7'),
            $this->page('services.party-bus', 'services.party-bus', 'monthly', '0.7'),
            $this->page('services.cruise-port-transfers', 'services.cruise-port-transfers', 'monthly', '0.7'),
            $this->page('services.chauffeured-service', 'services.chauffeur-service', 'monthly', '0.8'),
            $this->page('services.hourly-limo', 'services.hourly-limo', 'monthly', '0.8'),
        ]);
    }

    public function serviceAreas(): Response
    {
        return $this->urlset([
            $this->page('service-areas.index', 'service-areas.index', 'weekly', '0.8'),
            $this->page('service-area.new-jersey', 'service-areas.new-jersey', 'monthly', '0.8'),
            $this->page('service-area.new-york', 'service-areas.new-york', 'monthly', '0.8'),
            $this->page('service-area.connecticut', 'service-areas.connecticut', 'monthly', '0.8'),
            $this->page('service-area.pennsylvania', 'service-areas.pennsylvania', 'monthly', '0.8'),
            $this->page('service-area.california', 'service-areas.california', 'monthly', '0.7'),
            $this->page('service-area.nevada', 'service-areas.nevada', 'monthly', '0.7'),
            $this->page('service-area.washington', 'service-areas.washington', 'monthly', '0.7'),
        ]);
    }

    public function airports(): Response
    {
        return $this->urlset([
            $this->page('airports.index', 'airports.index', 'weekly', '0.8'),
            $this->page('airports.jfk', 'airports.jfk', 'monthly', '0.8'),
            $this->page('airports.lga', 'airports.lga', 'monthly', '0.8'),
            $this->page('airports.ewr', 'airports.ewr', 'monthly', '0.8'),
            $this->page('airports.hpn', 'airports.hpn', 'monthly', '0.7'),
            $this->page('airports.teb', 'airports.teb', 'monthly', '0.7'),
            $this->page('airports.phl', 'airports.phl', 'monthly', '0.7'),
            $this->page('airports.bdl', 'airports.bdl', 'monthly', '0.7'),
            $this->page('airports.lax', 'airports.lax', 'monthly', '0.7'),
            $this->page('airports.las', 'airports.las', 'monthly', '0.7'),
            $this->page('airports.sea', 'airports.sea', 'monthly', '0.7'),
        ]);
    }

    public function blogs(): Response
    {
        return $this->urlset([
            $this->page('blog.new-york-car-service-jfk-lga-ewr-tri-state', 'blogs.new-york-car-service-jfk-lga-ewr-tri-state', 'monthly', '0.7'),
            $this->page('blog.chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc', 'blogs.chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc', 'monthly', '0.7'),
            $this->page('blog.car-service-to-jfk-from-manhattan', 'blogs.car-service-to-jfk-from-manhattan', 'monthly', '0.7'),
            $this->page('blog.newark-airport-car-service-ewr', 'blogs.newark-airport-car-service-ewr', 'monthly', '0.7'),
            $this->page('blog.black-car-service-nyc-vs-uber-taxi', 'blogs.black-car-service-nyc-vs-uber-taxi', 'monthly', '0.7'),
        ]);
    }

    /**
     * @return array{loc: string, lastmod: string, changefreq: string, priority: string}
     */
    private function page(string $routeName, string $view, string $changefreq, string $priority): array
    {
        return [
            'loc' => route($routeName),
            'lastmod' => $this->lastmodForView($view),
            'changefreq' => $changefreq,
            'priority' => $priority,
        ];
    }

    /**
     * @param  array<int, string>  $views
     */
    private function latestLastmod(array $views): string
    {
        $latest = 0;

        foreach ($views as $view) {
            $path = $this->viewPath($view);
            if ($path !== null) {
                $latest = max($latest, (int) filemtime($path));
            }
        }

        return $latest > 0 ? date('Y-m-d', $latest) : now()->toDateString();
    }

    private function lastmodForView(string $view): string
    {
        $path = $this->viewPath($view);

        return $path !== null
            ? date('Y-m-d', filemtime($path))
            : now()->toDateString();
    }

    private function viewPath(string $view): ?string
    {
        $path = resource_path('views/'.str_replace('.', '/', $view).'.blade.php');

        return is_file($path) ? $path : null;
    }

    /**
     * @param  array<int, array{loc: string, lastmod: string, changefreq: string, priority: string}>  $pages
     */
    private function urlset(array $pages): Response
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($pages as $page) {
            $xml .= "    <url>\n";
            $xml .= '        <loc>'.e($page['loc'])."</loc>\n";
            $xml .= '        <lastmod>'.e($page['lastmod'])."</lastmod>\n";
            $xml .= '        <changefreq>'.e($page['changefreq'])."</changefreq>\n";
            $xml .= '        <priority>'.e($page['priority'])."</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        return $this->xml($xml);
    }

    private function xml(string $xml): Response
    {
        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}
