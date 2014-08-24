@section('main')
<h2>Create Project</h2>

{{ Form::model(new Project, ['route' => ['projects.store']]) }}
@include('projects/partials/_form', ['submit_text' => 'Create Project'])
{{ Form::close() }}
@stop

<!-- /app/views/projects/edit.blade.php -->
@section('main')
<h2>Edit Project</h2>

{{ Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) }}
@include('projects/partials/_form', ['submit_text' => 'Edit Project'])
{{ Form::close() }}
@stop