<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return Section::with([
  'quizzes:id,section_id',
  'quizzes.choices:id,quiz_id'
])->where('id', 1)->get(['id', 'title']);
    }
}
