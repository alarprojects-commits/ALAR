<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Google reviews</p>
                <h2>What riders say</h2>
                @if(!empty($reviews['rating']))
                    <p class="alar-stars" aria-label="{{ $reviews['rating'] }} stars">
                        @for($i = 0; $i < floor($reviews['rating']); $i++)★@endfor
                        {{ number_format($reviews['rating'], 1) }}
                        @if(!empty($reviews['total']))
                            · {{ number_format($reviews['total']) }} Google reviews
                        @endif
                    </p>
                @else
                    <p>Live reviews are loaded from the Alar Google listing.</p>
                @endif
            </div>
        </div>
        @if(!empty($reviews['reviews']))
            <div class="alar-grid-3">
                @foreach($reviews['reviews'] as $review)
                    <article class="alar-quote">
                        <p class="alar-stars" aria-label="{{ $review['rating'] ?? 5 }} stars">
                            @for($i = 0; $i < ($review['rating'] ?? 5); $i++)★@endfor
                        </p>
                        <p>“{{ $review['text'] }}”</p>
                        <p class="alar-author">
                            @if(!empty($review['profile']))
                                <a href="{{ $review['profile'] }}" target="_blank" rel="noopener noreferrer">{{ $review['author'] }}</a>
                            @else
                                {{ $review['author'] }}
                            @endif
                            @if(!empty($review['time']))
                                <span>{{ $review['time'] }}</span>
                            @endif
                        </p>
                    </article>
                @endforeach
            </div>
        @endif
        <div class="alar-actions" style="margin-top:1.4rem;">
            <a class="alar-btn alar-btn-ink" href="{{ $googleReviewsUrl }}" target="_blank" rel="noopener noreferrer">See all Google reviews</a>
            <a class="alar-btn alar-btn-line-dark" href="{{ $googleWriteUrl }}" target="_blank" rel="noopener noreferrer">Write a review</a>
        </div>
    </div>
</section>
