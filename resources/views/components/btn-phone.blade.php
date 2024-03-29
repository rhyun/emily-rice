 @hasoption('contact')
 @php
     $phone = get_field('contact', 'option')['phone'];
     $cleanedPhone = preg_replace('/[^0-9]/', '', $phone);
 @endphp

 <a class="btn btn-outline btn-call border-gray/[.25] group relative inline-flex items-center justify-items-end gap-0 overflow-hidden text-black transition hover:bg-black hover:text-white"
     href="tel:{{ $cleanedPhone }}" target="_blank">
     <span class="">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="h-5 w-5">
             <path stroke-linecap="round" stroke-linejoin="round"
                 d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
         </svg>
     </span>
     <span
         class="max-w-0 whitespace-nowrap opacity-0 transition group-hover:max-w-fit group-hover:pl-2 group-hover:opacity-100">
         @option('contact', 'phone')
         </span>
     </a>
 @endoption
