<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show($id)
    {
        $directores = Director::find($id);
        return view('posts.show', ["directores" => $directores]);
    }
}
