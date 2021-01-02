<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \File;

class QuoteController extends Controller
{
    public function index()
    {
        $file = "";
        return view('timeline')->with('file',$file);
    }
    public function click()
    {
        $file = File::get(storage_path('app/quote.txt'));
        
        $str = explode("\n",$file);
        
        return view('timeline')->with('file',$str[3]);
    }
}
