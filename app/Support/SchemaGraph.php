<?php

namespace App\Support;

class SchemaGraph
{
    public static function build(array $seo, ?array $reviews = null, ?string $pageUrl = null, ?string $pageImage = null): array
    {
        $biz = config('business');
        $base = rtrim($biz['url'], '/');
        $pageUrl = $pageUrl ?: url()->current();
        $logo = PageSeo::absolute($biz['logo']);
        $image = $pageImage ? PageSeo::absolute(parse_url($pageImage, PHP_URL_PATH) ?: $pageImage) : PageSeo::absolute($biz['image']);

        $sameAs = array_values(array_unique(array_filter(array_merge(
            $biz['same_as'] ?? [],
            array_filter([$biz['gbp_url'] ?? null])
        ))));

        $organization = [
            '@type' => 'Organization',
            '@id' => $base . '/#organization',
            'name' => $biz['name'],
            'url' => $base,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logo,
                'contentUrl' => $logo,
            ],
            'image' => $logo,
            'email' => $biz['email'],
            'telephone' => $biz['telephone'],
            'address' => array_merge(['@type' => 'PostalAddress'], $biz['address']),
            'sameAs' => $sameAs,
        ];

        $publisher = [
            '@type' => 'Organization',
            '@id' => $base . '/#organization',
            'name' => $biz['name'],
            'url' => $base,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logo,
                'contentUrl' => $logo,
                'width' => 600,
                'height' => 60,
            ],
        ];

        $localBusiness = [
            '@type' => ['LocalBusiness', 'LimousineService'],
            '@id' => $base . '/#localbusiness',
            'name' => $biz['name'],
            'url' => $base,
            'image' => $logo,
            'logo' => $logo,
            'email' => $biz['email'],
            'telephone' => $biz['telephone'],
            'priceRange' => $biz['price_range'],
            'address' => array_merge(['@type' => 'PostalAddress'], $biz['address']),
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => $biz['geo']['latitude'],
                'longitude' => $biz['geo']['longitude'],
            ],
            'areaServed' => $biz['area_served'],
            'openingHours' => $biz['opening_hours'],
            'sameAs' => $sameAs,
            'parentOrganization' => ['@id' => $base . '/#organization'],
        ];

        if (! empty($biz['gbp_url'])) {
            $localBusiness['hasMap'] = $biz['gbp_url'];
        }

        if (! empty($biz['place_id'])) {
            $localBusiness['identifier'] = [
                '@type' => 'PropertyValue',
                'name' => 'Google Place ID',
                'value' => $biz['place_id'],
            ];
            $localBusiness['hasMap'] = 'https://www.google.com/maps/place/?q=place_id:' . $biz['place_id'];
            if (! in_array($biz['gbp_url'], $sameAs, true) && ! empty($biz['gbp_url'])) {
                $sameAs[] = $biz['gbp_url'];
                $localBusiness['sameAs'] = $sameAs;
            }
        }

        if (! empty($reviews['rating']) && ! empty($reviews['total'])) {
            $localBusiness['aggregateRating'] = [
                '@type' => 'AggregateRating',
                'ratingValue' => (string) $reviews['rating'],
                'reviewCount' => (string) $reviews['total'],
                'bestRating' => '5',
                'worstRating' => '1',
            ];
        }

        $graph = [$organization, $localBusiness];

        $pageType = $seo['type'] ?? 'WebPage';
        $pageName = $seo['name'] ?? ($biz['name']);
        $pageDescription = $seo['description'] ?? null;
        $isService = ($pageType === 'Service') || ! empty($seo['service_type']);
        $webPageType = $isService ? 'WebPage' : $pageType;

        $webPage = [
            '@type' => $webPageType,
            '@id' => $pageUrl . '#webpage',
            'url' => $pageUrl,
            'name' => $pageName,
            'isPartOf' => ['@id' => $base . '/#website'],
            'about' => ['@id' => $base . '/#localbusiness'],
            'publisher' => $publisher,
            'inLanguage' => 'en-US',
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => $image,
            ],
        ];

        if ($pageDescription) {
            $webPage['description'] = $pageDescription;
        }

        if (! empty($seo['keywords'])) {
            $webPage['keywords'] = $seo['keywords'];
        }

        if ($webPageType === 'Article' || $webPageType === 'BlogPosting') {
            $webPage['headline'] = $pageName;
            $webPage['author'] = $publisher;
            $webPage['publisher'] = $publisher;
            $webPage['image'] = [
                '@type' => 'ImageObject',
                'url' => $image,
            ];
            $webPage['mainEntityOfPage'] = [
                '@type' => 'WebPage',
                '@id' => $pageUrl,
            ];
        }

        if ($isService) {
            $service = [
                '@type' => 'Service',
                '@id' => $pageUrl . '#service',
                'name' => $pageName,
                'provider' => ['@id' => $base . '/#localbusiness'],
                'url' => $pageUrl,
                'areaServed' => $seo['area_served'] ?? $biz['area_served'],
            ];
            if ($pageDescription) {
                $service['description'] = $pageDescription;
            }
            if (! empty($seo['service_type'])) {
                $service['serviceType'] = $seo['service_type'];
            }
            if ($pageImage) {
                $service['image'] = $image;
            }
            $graph[] = $service;
            $webPage['mainEntity'] = ['@id' => $pageUrl . '#service'];
        }

        $graph[] = [
            '@type' => 'WebSite',
            '@id' => $base . '/#website',
            'url' => $base,
            'name' => $biz['name'],
            'publisher' => $publisher,
            'potentialAction' => [
                '@type' => 'ReserveAction',
                'target' => $base . '/book-online',
            ],
        ];

        $graph[] = $webPage;

        if (! empty($seo['crumbs']) && is_array($seo['crumbs'])) {
            $items = [];
            $position = 1;
            $items[] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => 'Home',
                'item' => $base . '/',
            ];
            foreach ($seo['crumbs'] as $crumb) {
                $entry = [
                    '@type' => 'ListItem',
                    'position' => $position++,
                    'name' => $crumb['label'] ?? '',
                ];
                if (! empty($crumb['url'])) {
                    $entry['item'] = $crumb['url'];
                } else {
                    $entry['item'] = $pageUrl;
                }
                $items[] = $entry;
            }
            $graph[] = [
                '@type' => 'BreadcrumbList',
                '@id' => $pageUrl . '#breadcrumb',
                'itemListElement' => $items,
            ];
        }

        if (! empty($seo['faqs']) && is_array($seo['faqs'])) {
            $entities = [];
            foreach ($seo['faqs'] as $faq) {
                if (empty($faq['q']) || empty($faq['a'])) {
                    continue;
                }
                $entities[] = [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['a'],
                    ],
                ];
            }
            if ($entities) {
                $graph[] = [
                    '@type' => 'FAQPage',
                    '@id' => $pageUrl . '#faq',
                    'mainEntity' => $entities,
                    'isPartOf' => ['@id' => $pageUrl . '#webpage'],
                ];
            }
        }

        return [
            '@context' => 'https://schema.org',
            '@graph' => $graph,
        ];
    }
}
