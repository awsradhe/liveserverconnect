<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(Request $request) {
     $data = Student::get()->toArray();
    return view('home',compact('data'));
   }
   public function nextpages(Request $request) {
    return view('nextpages');
   }
}
