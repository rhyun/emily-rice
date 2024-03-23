{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    <section
        class="transition-bg border-light-gray home-main w-ful relative flex min-h-[100vh] flex-col items-center justify-center border-t bg-white md:min-h-[75vh]">
        <div class="-z-['1'] absolute inset-0 overflow-hidden">
            <div class="jumbo absolute -inset-[10px] opacity-50"></div>
        </div>
        <div class="prose wrapper relative z-10 flex flex-col items-center gap-4 text-center md:gap-8 lg:gap-12">

            {{-- <h1 class="lg:text-4xl xl:text-6xl">New Website Coming Soon<span class="text-orange">.</span></h1> --}}

            <ul class="*:m-0 *:px-16 divide-light-gray m-0 mx-auto mb-auto list-none p-0 md:flex md:divide-x">
                <li>
                    <h2>Visit the List<span class="text-orange">.</span></h2>

                    <a class="btn-thelist btn btn-primary normal-case" href="/thelist">TheList</a>
                </li>
                <li>
                    <h2>List a Job<span class="text-orange">.</span></h2>

                    <a class="btn btn-secondary btn-list-a-job" href="/list-a-job">List a Job</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
