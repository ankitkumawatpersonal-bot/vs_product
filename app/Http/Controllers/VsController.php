<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VsController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Vs::create([
            'name' => $request->name
        ]);

        return redirect('/');
    }
}
