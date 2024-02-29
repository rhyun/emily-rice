@hasfield('project_subtitle')
<p>
    @field('project_subtitle')
    </p>
@else
    @php(the_excerpt())
@endfield
