<?php

class Task extends \Eloquent {
    protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description'];

    public function project()
    {
        return $this->belongsTo('Project');
    }

}