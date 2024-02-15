@extends('layouts.app')

@section('content')
    <div id="container" class="">
        @while (have_posts())
            @php(the_post())
            <div class="bg-[#F5F5F5]">
                @include('partials.page-header')
                @includeFirst(['partials.content-page', 'partials.content'])
            </div>
        @endwhile
    </div>
@endsection
