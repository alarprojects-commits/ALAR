@if(!empty($reviews['reviews']) || $reviews['rating'])
<section class="ve-section ve-testimonials-section ve-google-reviews">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">What Clients Say</span>
            <h2>Trusted Worldwide — <span>Verified Google Reviews</span></h2>
            @if($reviews['rating'])
                <p class="ve-google-rating">
                    @for($i = 0; $i < floor($reviews['rating']); $i++)
                        &#9733;
                    @endfor
                    {{ number_format($reviews['rating'], 1) }}
                    ({{ number_format($reviews['total']) }} Google Reviews)
                </p>
            @endif
        </div>

        @if(!empty($reviews['reviews']))
            <div class="row g-4 ve-google-reviews-grid">
                @foreach($reviews['reviews'] as $review)
                    @php
                        $initials = collect(explode(' ', $review['author']))
                            ->filter()
                            ->map(fn ($w) => strtoupper(substr($w, 0, 1)))
                            ->take(2)
                            ->join('');
                    @endphp
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="ve-testi-card h-100">
                        <div class="ve-testi-stars">
                            @for($i = 0; $i < ($review['rating'] ?? 5); $i++)
                                &#9733;
                            @endfor
                        </div>
                        <p>"{{ $review['text'] }}"</p>
                        <div class="ve-testi-author">
                            <div class="ve-testi-avatar-text">{{ $initials ?: 'G' }}</div>
                            <div>
                                @if($review['profile'])
                                    <strong><a href="{{ $review['profile'] }}" target="_blank" rel="noopener noreferrer">{{ $review['author'] }}</a></strong>
                                @else
                                    <strong>{{ $review['author'] }}</strong>
                                @endif
                                <span>{{ $review['time'] }}</span>
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="ve-review-actions text-center">
            <a href="{{ $googleReviewsUrl }}" class="ve-btn-primary" target="_blank" rel="noopener noreferrer">See All Google Reviews</a>
            <a href="{{ $googleWriteUrl }}" class="ve-btn-ghost-dark" target="_blank" rel="noopener noreferrer">Write a Review</a>
        </div>
    </div>
</section>
@endif
