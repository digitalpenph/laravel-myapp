<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Welcome to MyApp index page!'
        );
	    return view('pages.index')->with($data);
    }

    public function about() {
        $data = array(
            'title' => 'About'
        );
	    return view('pages.about')->with($data);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development', 'Mobile Development', 'App Development']
        );
	    return view('pages.services')->with($data);
    }
}
