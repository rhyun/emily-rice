@group('application')
    @hassub('email')
    <a class="button btn-primary btn btn-wide apply-btn bg-[#222222] text-white" href="mailto:@sub('email')
"
        target="_blank">
        Apply by Email
    </a>
@endsub
@hassub('link')
<a class="button btn-primary btn btn-wide apply-btn bg-[#222222] text-white" href="@sub('link')
"
    target="_blank">
    Apply by Link
</a>
@endsub
@endgroup
