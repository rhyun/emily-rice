{{--
  Template Name: Default Template
--}}

@extends('layouts.app')

@section('content')
    <div id="container" class="wrapper prose">
        @while (have_posts())
            @php(the_post())
            <div>
                @include('partials.page-header')
                @includeFirst(['partials.content-page', 'partials.content'])
            </div>
        @endwhile
    </div>
@endsection
