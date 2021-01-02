<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'quiz_id' => 'required',
        'choice' => 'required',
    );

    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }
    
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
        . $this->person->name . ')';
    }

}