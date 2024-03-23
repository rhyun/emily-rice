 <section id="the-list" class="the-list js-tabs xl:bg-blue-gray h-full w-full bg-white xl:pb-12">
     <div
         class="wrapper-l h-full bg-white xl:grid xl:grid-cols-12 xl:gap-12 xl:rounded-b-2xl xl:shadow-[0_0px_120px_rgba(0,0,0,0.15)]">
         @php $counter = 0; @endphp
         @hasposts
             <nav class="tabs-nav js-tabs-nav py-14 xl:col-span-5 xl:pl-12 2xl:col-span-4">
                 {{-- <header class="">
                            All Results
                        </header> --}}
                 <div
                     class="cards-list mx-auto grid w-full max-w-sm auto-rows-fr grid-cols-1 gap-4 md:max-w-none md:grid-cols-2 md:gap-8 md:py-8 lg:grid-cols-3 xl:flex xl:flex-col">

                     @posts
                         @php $counter++; @endphp
                         @include('partials.list-card')

                         @hasoption('square_toggle')
                         @if ($counter === 3)
                             @include('ads.ad-square-primary')
                         @endif

                         @if ($counter === 6)
                             @include('ads.ad-square-secondary')
                         @endif

                         @if ($counter === 9)
                             @include('ads.ad-square-tertiary')
                         @endif
                         @endoption
                     @endposts
                 </div>

                 @include('partials.pagination')
             </nav>

             <section
                 class="tabs-main xl:border-light-gray w-full bg-white xl:sticky xl:top-0 xl:col-span-7 xl:h-screen xl:rounded-br-2xl xl:border-l 2xl:col-span-8">
                 <div class="tabs-wrapper xl:h-screen xl:overflow-hidden">
                     @posts
                         @include('partials.list-article')
                     @endposts
                 </div>
             </section>
         @endhasposts
     </div>
 </section>
