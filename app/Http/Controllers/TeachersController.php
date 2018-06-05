<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
 public function teacher()
 {
     return view('teacher');
 }
}
