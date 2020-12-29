<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show($id)
    {
        $directores = Director::findorfail($id);
        return view('posts.show', ["directores" => $directores]);
    }
}
