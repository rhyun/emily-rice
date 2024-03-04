@php
    $country = get_field('country');
    $state = get_field('state-province');
    $stateCode = get_field('state_code', $state);
    $city = get_field('city');
@endphp

<span
    class="badge text-gray border-light-gray font-circular-med bg-transparent text-xs uppercase leading-7 tracking-widest">
    <span class="m-0 mr-1.5">
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
