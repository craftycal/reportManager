<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function landing(){
      $title = 'login';
      return view('pages.landing')->with('title', $title);
    }
    
    public function userHome(){
      $title = 'welcome';
      return view('pages.userHome')->with('title', $title);
    }
    
    public function newReport(){
      $title = 'new';
      return view('pages.newReport')->with('title', $title);
    }
    
    public function error(){
      $title = 'error';
      return view('pages.404')->with('title', $title);
    }
    
    public function viewReport(){
      $title = 'view report';
      return view('pages.viewReport')->with('title', $title);
    }
    
}
