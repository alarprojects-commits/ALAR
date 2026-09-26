<section class="alar-banner {{ $modifier ?? '' }}" style="background-image:url('{{ $image }}')">
    <div class="alar-wrap">
        <p class="alar-kicker">{{ $kicker }}</p>
        <h1>{{ $title }}</h1>
        @if(!empty($crumb))
            <ol class="alar-crumbs">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>{{ $crumb }}</li>
            </ol>
        @endif
    </div>
</section>
