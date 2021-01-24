<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );

    public function sections()
    {
        return $this->belongsToMany('App\Models\Section');
    }
    
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
        . $this->person->name . ')';
    }

}
