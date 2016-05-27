<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Book;

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
        return view('home');
    }
    
    public function setting()
    {
        return view('setting');
    }

    public function getData()
    {
        //return view('getData');
          $booksList = Book::paginate(9);
        
        //$booksList = Books::all();
        return view('home')->with('booksList', $booksList);
    }
}
