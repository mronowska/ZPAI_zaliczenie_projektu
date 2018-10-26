<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
      return view('home');
    }
    public function getAbout()
    {
      return view('about');
    }
    public function getContact()
    {
      return view('contact');
    }
    public function getKanada()
    {
      return view('kanada');
    }
    public function getMalta()
    {
      return view('malta');
    }
    public function getParciaki()
    {
      return view('parciaki');
    }
}
