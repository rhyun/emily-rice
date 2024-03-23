{{--
  Template Name: The List Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.list-hero')

    <div id="container" class="xl:bg-blue-gray bg-white">
        <div
            class="before:bg-star-gray relative z-[1] w-full before:absolute before:left-0 before:top-0 before:-z-[1] before:h-2/4 before:w-full">
            @include('partials.page-search')
        </div>

        @include('ads.ad-content-full')
        @noposts
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
        @endnoposts

        @include('partials.content-list')

        {{-- @include('partials.list-faq') --}}
    @endsection
