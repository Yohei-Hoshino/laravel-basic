<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $name = '侍 太郎';
        $languages = ['HTML', 'VSS', 'Java'];

        return view('index', compact('name', 'languages'));
    }
}