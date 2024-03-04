@group('application')
    <article>
        <h3 class="font-eina-bold text-lg lg:text-xl">Apply By:</h3>
        @hassub('email')
        <p>Please send your resume to: <a class="apply-link link" href="mailto:@sub('email')
"
                target="_blank">@sub('email')</a></p>
        @endsub
        @hassub('link')
        <p>Please submit resumes and references to: <a class="apply-link link" href="@sub('link')
" target="_blank">
                @sub('link')
                </a>
            </p>
        @endsub
    </article>
@endgroup
