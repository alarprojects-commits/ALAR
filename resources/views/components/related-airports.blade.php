<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Airports</p>
                <h2>{{ $heading ?? 'Other airports we serve' }}</h2>
            </div>
            <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.index') }}">All airports</a>
        </div>
        <div class="alar-airport-strip">
            @foreach (($links ?? []) as $link)
                <a class="alar-airport-pill" href="{{ route($link['route']) }}">
                    <span>{{ $link['state'] }} · {{ $link['code'] }}</span>
                    <strong>{{ $link['name'] }}</strong>
                    <em>{{ $link['blurb'] }}</em>
                </a>
            @endforeach
        </div>
    </div>
</section>
