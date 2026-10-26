@props(['current' => ''])
@php
    $guides = [
        'jfk' => ['label' => 'JFK Airport car service', 'route' => 'airports.jfk'],
        'lga' => ['label' => 'LaGuardia (LGA) car service', 'route' => 'airports.lga'],
        'ewr' => ['label' => 'Newark (EWR) car service', 'route' => 'airports.ewr'],
        'hpn' => ['label' => 'Westchester (HPN) car service', 'route' => 'airports.hpn'],
        'teb' => ['label' => 'Teterboro (TEB) car service', 'route' => 'airports.teb'],
        'phl' => ['label' => 'Philadelphia (PHL) car service', 'route' => 'airports.phl'],
        'bdl' => ['label' => 'Bradley (BDL) car service', 'route' => 'airports.bdl'],
        'bos' => ['label' => 'Boston Logan (BOS) car service', 'route' => 'airports.bos'],
        'lax' => ['label' => 'LAX Airport car service', 'route' => 'airports.lax'],
        'las' => ['label' => 'Las Vegas (LAS) car service', 'route' => 'airports.las'],
        'sea' => ['label' => 'Sea-Tac (SEA) car service', 'route' => 'airports.sea'],
    ];
    $peers = match ($current) {
        'jfk', 'lga', 'ewr' => ['jfk', 'lga', 'ewr', 'hpn', 'teb', 'phl'],
        'hpn', 'teb', 'bdl' => ['jfk', 'lga', 'ewr', 'hpn', 'teb', 'bdl', 'bos'],
        'bos' => ['bos', 'bdl', 'jfk', 'lga', 'ewr', 'hpn'],
        'phl' => ['jfk', 'ewr', 'lga', 'phl', 'bdl'],
        'lax' => ['lax', 'las', 'sea', 'jfk', 'ewr'],
        'las' => ['las', 'lax', 'sea', 'jfk'],
        'sea' => ['sea', 'lax', 'las', 'jfk'],
        default => ['jfk', 'lga', 'ewr', 'hpn'],
    };
@endphp
<h2>Related airport guides</h2>
<p>Browse more airport car service guides, then book a reserved chauffeur with a confirmed rate.</p>
<div class="ve-amenities-list">
    <ul>
        @foreach ($peers as $code)
            @if ($code !== $current && isset($guides[$code]))
                <li><i class="fa fa-check"></i> <a href="{{ route($guides[$code]['route']) }}" style="color: var(--ve-gold);"><b>{{ $guides[$code]['label'] }}</b></a></li>
            @endif
        @endforeach
        <li><i class="fa fa-check"></i> <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>All airport guides</b></a></li>
        <li><i class="fa fa-check"></i> <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>Airport chauffeur service NJ</b></a></li>
    </ul>
</div>
