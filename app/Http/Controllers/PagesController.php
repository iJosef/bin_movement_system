<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bin_movements(Request $request)
    {
        $user = auth()->user();
        return view('pages.bin_movement', compact('user'));
    }

    public function my_tasks(Request $request)
    {
        $user = auth()->user();
        return view('pages.my_tasks', compact('user'));
    }
}
