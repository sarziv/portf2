<div>
    <div id="projects" class="infoNameProjects brush">Projects</div>
    <div class="infoDataProjects">
        <div class="row projectBox col-sm-12">
            @include('projects.proj1')
        </div>
        <div class="row projectBox col-sm-12">
            @include('projects.proj2')
        </div>
        <div class="row projectBox col-sm-12">
            @include('projects.proj3')
        </div>
        <div class="row projectBox col-sm-12">
            @include('projects.proj4')
        </div>
    </div>

    @foreach (glob(base_path() . '/resources/views/modals/*.blade.php') as $file)
        @include('modals.' . basename(str_replace('.blade.php', '', $file)))
    @endforeach

</div>