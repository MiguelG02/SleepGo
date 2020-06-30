<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function privateDemo() {
        return view('private.index');
    }

    public function adminDemo() {
        return view('admin.index');
    }

    public function semAcesso() {
        return view('admin.semacesso');
    }
}
