<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function people($users, $name): View
    {
        $users="somebody";
        $name = "Li";
        $data = compact('users', 'name');
        return view('Hello');
    }

}
