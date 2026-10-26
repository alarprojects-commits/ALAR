@props(['cluster' => 'default'])
@php
    $sets = [
        'airport' => [
            'title' => 'Related Services & Coverage',
            'intro' => 'Pair airport chauffeur service with the right vehicle, corridor, and trip type.',
            'links' => [
                ['route' => 'services.group-transportation', 'label' => 'Group transportation NJ'],
                ['route' => 'services.cruise-port-transfers', 'label' => 'Cruise port transfers'],
                ['route' => 'services.corporate-transportation', 'label' => 'Corporate transportation New Jersey'],
                ['route' => 'services.hourly-limo', 'label' => 'Hourly chauffeur service'],
                ['route' => 'services.chauffeured-service', 'label' => 'Executive chauffeur service NJ'],
                ['route' => 'service-area.new-jersey', 'label' => 'New Jersey car service'],
                ['route' => 'service-area.new-york', 'label' => 'New York car service'],
                ['route' => 'our-fleet', 'label' => 'Sedan, SUV & Sprinter fleet'],
                ['route' => 'book-online', 'label' => 'Book airport car service NJ online'],
            ],
        ],
        'group' => [
            'title' => 'Popular Related Services',
            'intro' => 'Groups often combine Sprinter travel with events, airports, and celebrations.',
            'links' => [
                ['route' => 'services.party-bus', 'label' => 'Party bus rental New Jersey'],
                ['route' => 'services.concert-festival', 'label' => 'Event transportation NJ'],
                ['route' => 'services.sporting-events', 'label' => 'MetLife Stadium car service'],
                ['route' => 'services.wedding-limo', 'label' => 'Wedding limo New Jersey'],
                ['route' => 'services.airport-transportation', 'label' => 'Airport chauffeur service NJ'],
                ['route' => 'services.cruise-port-transfers', 'label' => 'Cruise port transportation'],
                ['route' => 'services.corporate-transportation', 'label' => 'Corporate transportation NJ'],
                ['route' => 'our-fleet', 'label' => 'Sprinter & coach fleet'],
                ['route' => 'service-area.new-jersey', 'label' => 'New Jersey group coverage'],
            ],
        ],
        'cruise' => [
            'title' => 'Related Travel Services',
            'intro' => 'Cruise embarkation pairs well with airport transfers, groups, and hourly wait time.',
            'links' => [
                ['route' => 'services.airport-transportation', 'label' => 'Airport transfers New Jersey'],
                ['route' => 'services.group-transportation', 'label' => 'Group transportation NJ'],
                ['route' => 'services.party-bus', 'label' => 'Party bus rental New Jersey'],
                ['route' => 'services.hourly-limo', 'label' => 'Hourly chauffeur / hotel transfers NJ'],
                ['route' => 'airports.ewr', 'label' => 'Newark Airport car service (EWR)'],
                ['route' => 'airports.jfk', 'label' => 'JFK Airport car service'],
                ['route' => 'airports.lga', 'label' => 'LaGuardia car service'],
                ['route' => 'service-area.new-jersey', 'label' => 'New Jersey car service'],
                ['route' => 'service-area.new-york', 'label' => 'New York car service'],
            ],
        ],
        'corporate' => [
            'title' => 'Related Executive Services',
            'intro' => 'Corporate itineraries often need airports, hourly coverage, and black car reliability.',
            'links' => [
                ['route' => 'services.chauffeured-service', 'label' => 'Executive chauffeur service NJ'],
                ['route' => 'services.airport-transportation', 'label' => 'Airport chauffeur service NJ'],
                ['route' => 'services.hourly-limo', 'label' => 'Hourly chauffeur service'],
                ['route' => 'services.group-transportation', 'label' => 'Group transportation NJ'],
                ['route' => 'airports.ewr', 'label' => 'Professional chauffeur EWR'],
                ['route' => 'airports.jfk', 'label' => 'JFK Airport car service'],
                ['route' => 'service-area.new-jersey', 'label' => 'New Jersey car service'],
                ['route' => 'our-fleet', 'label' => 'Executive sedan & SUV fleet'],
                ['route' => 'book-online', 'label' => 'Book corporate car service online'],
            ],
        ],
        'event' => [
            'title' => 'Popular Related Services',
            'intro' => 'Event nights often need group vehicles, airports, and flexible hourly coverage.',
            'links' => [
                ['route' => 'services.group-transportation', 'label' => 'Group transportation NJ'],
                ['route' => 'services.party-bus', 'label' => 'Party bus rental New Jersey'],
                ['route' => 'services.sporting-events', 'label' => 'Sporting event car service'],
                ['route' => 'services.wedding-limo', 'label' => 'Wedding limo New Jersey'],
                ['route' => 'services.prom-limo', 'label' => 'Prom limo New Jersey'],
                ['route' => 'services.airport-transportation', 'label' => 'Airport chauffeur service NJ'],
                ['route' => 'services.hourly-limo', 'label' => 'Hourly chauffeur service'],
                ['route' => 'service-area.new-jersey', 'label' => 'New Jersey car service'],
                ['route' => 'service-area.new-york', 'label' => 'New York car service'],
            ],
        ],
        'default' => [
            'title' => 'Explore More Alar Services',
            'intro' => 'Reserved chauffeur options across New Jersey, New York, and our airport network.',
            'links' => [
                ['route' => 'services.airport-transportation', 'label' => 'Airport chauffeur service NJ'],
                ['route' => 'services.corporate-transportation', 'label' => 'Corporate transportation New Jersey'],
                ['route' => 'services.group-transportation', 'label' => 'Group transportation NJ'],
                ['route' => 'services.cruise-port-transfers', 'label' => 'Cruise port transfers'],
                ['route' => 'airports.index', 'label' => 'Airport car service guides'],
                ['route' => 'service-areas.index', 'label' => 'Service areas'],
                ['route' => 'our-fleet', 'label' => 'Our fleet'],
                ['route' => 'book-online', 'label' => 'Book online'],
            ],
        ],
    ];
    $set = $sets[$cluster] ?? $sets['default'];
@endphp
<div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
    <h2>{{ $set['title'] }}</h2>
    <p>{{ $set['intro'] }}</p>
    <div class="ve-amenities-list mt-30">
        <ul>
            @foreach ($set['links'] as $link)
                <li><i class="fa fa-check"></i> <a href="{{ route($link['route']) }}" style="color: var(--ve-gold);"><b>{{ $link['label'] }}</b></a></li>
            @endforeach
        </ul>
    </div>
</div>
