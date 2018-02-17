<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use home;

class homeController extends Controller
{
  public function index()
  {
<<<<<<< HEAD
    $data = home::all();
=======
>>>>>>> c7ff34d4789cc7edaaa0de49a2585fda6e76a955
    $sum = 5+6;
    //return $sum;
    return view('welcome',compact('sum'));
  }
}
