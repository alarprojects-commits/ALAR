@php
    $guideTitle = $guideTitle ?? 'Plan the trip';
    $guideHeading = $guideHeading ?? 'Pick a route';
    $guideLead = $guideLead ?? 'Tap a topic on the left. Only that guide opens on the right.';
    $ariaLabel = $ariaLabel ?? 'Airport topics';
    $panels = $panels ?? [];
@endphp
<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">{{ $guideTitle }}</p><h2>{{ $guideHeading }}</h2></div></div>
        <p class="alar-guide-lead">{{ $guideLead }}</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="{{ $ariaLabel }}">
                @foreach ($panels as $index => $panel)
                    <button type="button" @class(['is-on' => $index === 0]) data-guide="{{ $panel['id'] }}" role="tab" @if($index === 0) aria-selected="true" @else aria-selected="false" @endif>
                        <span class="alar-guide-num">{{ $panel['num'] ?? str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="alar-guide-label">{{ $panel['label'] }}</span>
                        @if(!empty($panel['hint']))
                            <span class="alar-guide-hint">{{ $panel['hint'] }}</span>
                        @endif
                    </button>
                @endforeach
            </div>
            <div class="alar-guide-panels">
                @foreach ($panels as $index => $panel)
                    <article id="{{ $panel['id'] }}" @class(['alar-guide-panel', 'is-on' => $index === 0]) role="tabpanel">
                        <div class="alar-guide-media" style="background-image:url('{{ $panel['image'] }}')"></div>
                        <div class="alar-guide-copy">
                            <h3>{{ $panel['title'] }}</h3>
                            @foreach ($panel['paragraphs'] ?? [] as $paragraph)
                                <p>{!! $paragraph !!}</p>
                            @endforeach
                            @if(!empty($panel['actions']))
                                <div class="alar-guide-actions">
                                    @foreach ($panel['actions'] as $action)
                                        <a @class([
                                            'alar-btn',
                                            'alar-btn-gold' => ($action['variant'] ?? 'line') === 'gold',
                                            'alar-btn-line' => ($action['variant'] ?? 'line') === 'line',
                                        ]) href="{{ route($action['route'], $action['params'] ?? []) }}">{{ $action['label'] }}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
