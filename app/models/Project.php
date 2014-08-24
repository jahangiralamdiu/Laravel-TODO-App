<?php

class Project extends \Eloquent {
    protected $fillable = ['name', 'slug'];

    public function tasks()
    {
        return $this->hasMany('Task');
    }
}