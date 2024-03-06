@php
    $country = get_field('country');
    $state = get_field('state-province');
    $stateCode = get_field('state_code', $state);
    $city = get_field('city');
@endphp

<span class="flex items-center gap-1.5">
    <span class="m-0">
        @include('icons.icon-location')
    </span>

    @if ($city)
        {{ esc_html($city->name) }},
    @endif
    @if ($stateCode)
        {{ $stateCode }}
    @elseif ($state)
        {{ esc_html($state->name) }}
    @elseif ($country)
        {{ esc_html($country->name) }}
    @else
        N/A
    @endif
</span>
