<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Request $request)
    {   
        $id = $request->input('id');
        
        return Section::all();
    }
    
    public function getSection(Request $request)
    {   
        $id = $request->input('id');
        
        return Section::with([
                 'quizzes:id,section_id,order,image_src,correct',
                 'quizzes.choices:id,quiz_id,choice'
               ])->where('id', $id)->get(['id', 'title']);
    }
}
