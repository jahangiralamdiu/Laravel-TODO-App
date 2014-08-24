<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
	public function index()
	{
        $projects = Project::all();
        $this->layout->content = View::make('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('projects.create', compact('projects'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        Project::create( $input );

        return Redirect::route('projects.index')->with('message', 'Project created');
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit(Project $project)
    {
        $this->layout->content = View::make('projects.edit', compact('project'));
    }

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Project $project)
	{
        $input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project)
	{
        $project->delete();

        return Redirect::route('projects.index')->with('message', 'Project deleted.');
    }

}