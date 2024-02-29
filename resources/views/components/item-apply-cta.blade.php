@group('application')
    @hassub('email')
    <p>Please send your resume to:<a class="apply-link list-link" href="mailto:@sub('email')
"
            target="_blank">@sub('email')</a></p>
    @endsub
    @hassub('link')
    <p>Please submit resumes and references to:
        <a class="apply-link list-link" href="@sub('link')
" target="_blank">
            @sub('link')
            </a>
        </p>
    @endsub
@endgroup
