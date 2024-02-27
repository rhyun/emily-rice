<div class="*:line-clamp-2 *:tracking-wide *:m-0">
    @hasfield('project_subtitle')
    <p>
        @field('project_subtitle')
        </p>
    @else
        @php(the_excerpt())
    @endfield
</div>
