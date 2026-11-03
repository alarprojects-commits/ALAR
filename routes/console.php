<?php

use App\Http\Controllers\SitemapController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('indexnow:submit', function () {
    $key = (string) config('services.indexnow.key');
    $origin = rtrim((string) config('business.url'), '/');
    $host = parse_url($origin, PHP_URL_HOST);

    URL::forceRootUrl($origin);
    URL::forceScheme('https');

    $controller = app(SitemapController::class);
    $urls = [];
    foreach (['mainPages', 'services', 'serviceAreas', 'airports', 'blogs'] as $method) {
        preg_match_all('#<loc>(.*?)</loc>#', $controller->{$method}()->getContent(), $matches);
        foreach ($matches[1] as $loc) {
            $urls[] = html_entity_decode($loc, ENT_QUOTES);
        }
    }
    $urls = array_values(array_unique($urls));

    $response = Http::acceptJson()->timeout(30)->post('https://api.indexnow.org/indexnow', [
        'host' => $host,
        'key' => $key,
        'keyLocation' => $origin.'/'.$key.'.txt',
        'urlList' => $urls,
    ]);

    $this->info('Submitted '.count($urls).' URLs to IndexNow.');
    $this->line('HTTP '.$response->status());
    $body = trim($response->body());
    if ($body !== '') {
        $this->line($body);
    }

    return $response->successful() ? 0 : 1;
})->purpose('Submit public pages to IndexNow');
