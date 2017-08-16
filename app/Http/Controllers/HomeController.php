<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $rss = @simplexml_load_file("http://tecnologia.uol.com.br/ultnot/index.xml");


    if ($rss === false){
      $errorMessage = 1;
    }else{
      $errorMessage = 0;
    }
    return view('home')->with('errorMessage', $errorMessage)->with('rss', $rss);
    //}else {
    //return view('home')->with('rss', $rss);
    //}


  }
}
