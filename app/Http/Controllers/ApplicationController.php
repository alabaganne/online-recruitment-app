<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index() {
        return view('application.index');
    }
    public function create() {
        return view('apply');
    }

    public function store(Request $request) {
        // Code
    }

    public function show() {
        return view('application.show');
    }
}
