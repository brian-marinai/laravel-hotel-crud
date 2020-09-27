<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class StanzeController extends Controller
{
    public function index() {
      $stanze = Stanza::all();
      return view('home', compact('stanze'));
    }
}
