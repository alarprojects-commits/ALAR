{{-- Slim rating bar for bookers (no quote cards). --}}
@php
    $reviews = $reviews ?? ['rating' => null, 'total' => 0, 'reviews' => []];
    $googleReviewsUrl = $googleReviewsUrl ?? (config('business.gbp_url') ?: '#');
@endphp

@if (!empty($reviews['rating']))
<div class="ve-rating-bar">
    <div class="container">
        <div class="ve-rating-bar-inner">
            <span class="ve-rating-bar-score">{{ number_format($reviews['rating'], 1) }}</span>
            <span class="ve-rating-bar-stars" aria-hidden="true">
                @for ($i = 0; $i < floor($reviews['rating']); $i++)
                    &#9733;
                @endfor
            </span>
            <span class="ve-rating-bar-meta">{{ number_format($reviews['total'] ?? 0) }} Google reviews</span>
            <a href="{{ $googleReviewsUrl }}" target="_blank" rel="noopener noreferrer" data-engage="view_reviews">Read reviews</a>
        </div>
    </div>
</div>
@endif
