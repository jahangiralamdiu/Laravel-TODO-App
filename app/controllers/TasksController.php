<?php

class TasksController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param  Project  $project	 * @return Response
     */
    public function index(Project $project)	{
        $this->layout->content = View::make('tasks.index', compact('project'));	}

    /**
     * Show the form for creating a new resource.
     *
     * @param  Project  $project	 * @return Response
     */
    public function create(Project $project)	{
        $this->layout->content = View::make('tasks.create', compact('project'));	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  Project  $project	 * @return Response
     */
    public function store(Project $project)	{
        $input = Input::all();
        $input['project_id'] = $project->id;
        Task::create( $input );

        return Redirect::route('projects.show', $project->slug)->with('Task created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function show(Project $project, Task $task)	{
        $this->layout->content = View::make('tasks.show', compact('project', 'task'));	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function edit(Project $project, Task $task)	{
        $this->layout->content = View::make('tasks.edit', compact('project', 'task'));	}

    /**
     * Update the specified resource in storage.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function update(Project $project, Task $task)	{
        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('projects.tasks.show', [$project->slug, $task->slug])->with('message', 'Task updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function destroy(Project $project, Task $task)	{
        $task->delete();

        return Redirect::route('projects.show', $project->slug)->with('message', 'Task deleted.');
    }

}