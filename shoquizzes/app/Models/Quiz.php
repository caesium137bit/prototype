<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'section_id' => 'required',
        'order' => 'required',
        'image_src' => 'required',
        'correct' => 'required',
    );

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }
    
    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
    }
    
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
        . $this->person->name . ')';
    }

}
