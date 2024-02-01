@extends('layouts.app')

@section('content')
    <div id="container" class="">
        @while (have_posts())
            @php(the_post())
            <div class="">
                @include('partials.page-header')
                @includeFirst(['partials.content-page', 'partials.content'])
            </div>
        @endwhile
    </div>
@endsection
