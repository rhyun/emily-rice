@group('application')
    @hassub('email')
    <a class="button btn btn-wide" href="mailto:@sub('email')
" target="_blank">
        Apply by Email
    </a>
@endsub
@hassub('link')
<a class="button btn btn-wide" href="@sub('link')
" target="_blank">
    Apply by Link
</a>
@endsub
@endgroup
