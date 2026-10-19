@php
    $pageSeo = \App\Support\PageSeo::current();
    $ogImage = trim($__env->yieldContent('og_image'));
    $graph = \App\Support\SchemaGraph::build(
        $pageSeo,
        null,
        url()->current(),
        $ogImage !== '' ? $ogImage : null
    );
@endphp
<script type="application/ld+json">{!! json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
