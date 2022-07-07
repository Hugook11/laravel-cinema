<?php

namespace App\http\Controllers;
use Illuminate\Support\Facades\DB;

class PageController extends Controller {

    public function programme(){
        return view('programme');
    }

    public function apropos(){
        return view('apropos');
    }
    
    public function tarifs() {
        /* $articles =articles::all();
        return view('tarifs', compact('articles')); 
    
        */
        
        $articles = DB::select('select * from articles');
        echo $articles;
        /* return view('tarifs', compact('articles'));  */
    } 

    public function accessibilite() {
        return view('accessibilite');
    }
}