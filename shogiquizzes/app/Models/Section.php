<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );

    public function quizzes()
    {
        return $this->hasMany('App\Models\Quiz');
    }
    
    public function choices()
    {
        return $this->hasManyThrough('App\Models\Choice', 'App\Models\Quiz', 'section_id', 'quiz_id', 'id', 'id');
    }
    
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
        . $this->person->name . ')';
    }

}
