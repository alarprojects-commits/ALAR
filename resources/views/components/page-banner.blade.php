<section class="alar-banner {{ $modifier ?? '' }}" style="background-image:url('{{ $image }}')">
    <div class="alar-wrap">
        <p class="alar-kicker">{{ $kicker }}</p>
        <h1>{{ $title }}</h1>
        @php
            $trail = $crumbs ?? null;
            if ($trail === null && !empty($crumb)) {
                $trail = [['label' => $crumb]];
            }
            $trail = collect($trail ?? [])->map(function ($item) {
                if (is_string($item)) {
                    return ['label' => $item, 'url' => null];
                }
                return [
                    'label' => $item['label'] ?? '',
                    'url' => $item['url'] ?? null,
                ];
            })->filter(fn ($item) => $item['label'] !== '')->values();
        @endphp
        @if($trail->isNotEmpty())
            <nav aria-label="Breadcrumb">
                <ol class="alar-crumbs">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @foreach($trail as $index => $item)
                        @php $isLast = $index === $trail->count() - 1; @endphp
                        <li @if($isLast) aria-current="page" @endif>
                            @if(!$isLast && !empty($item['url']))
                                <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                            @else
                                <span>{{ $item['label'] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
        @endif
    </div>
</section>
