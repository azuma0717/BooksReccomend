<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller{

    // Start MainPage
    public function index(){
      return view('main');
    }
}
