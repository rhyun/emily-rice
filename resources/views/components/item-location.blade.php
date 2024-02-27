@php
    $country = get_field('country');
    $state = get_field('state-province');
    $stateCode = get_field('state_code', $state);
    $city = get_field('city');
@endphp

<span class="m-0 text-black">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="h-4 w-4 p-0">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
    </svg>
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
@endif
