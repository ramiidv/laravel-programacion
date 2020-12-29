<?php

namespace App\Http\Controllers;
use App\Models\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show($id)
    {
        $actores = Actor::findorfail($id);
        return view('actores.show', ["actores" => $actores]);
    }
}
