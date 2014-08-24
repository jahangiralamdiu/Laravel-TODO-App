@section('main')
<h2>Projects</h2>
@if ( !$projects->count() )
You have no projects
@else
<ul>
    @foreach( $projects as $project )
    <li>
        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
        ({{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) }}
        {{ link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) }},
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}	)
    </li>
    @endforeach
</ul>
@endif

<p>{{ link_to_route('projects.create', 'Create Project') }}</p>
@stop

<!-- /app/views/projects/show.blade.php -->
@section('main')
<h2>{{ $project->name }}</h2>
@if ( !$project->tasks->count() )
Your project has no tasks.
@else
<ul>
    @foreach( $project->tasks as $task )
    <li>
        <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>
        ({{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) }}
        {{ link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) }},
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}	)
    </li>
    @endforeach
</ul>
@endif

<p>
    {{ link_to_route('projects.index', 'Back to Projects') }} | {{ link_to_route('projects.tasks.create', 'Create Task', $project->slug) }}
</p>
@stop