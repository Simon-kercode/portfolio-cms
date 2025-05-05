<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller {

    // On récupère les 3 projets les plus récents
    public function index() {
        $projects = Project::latest()->take(3)->get();
        return view('home', compact('projects'));
    }

}