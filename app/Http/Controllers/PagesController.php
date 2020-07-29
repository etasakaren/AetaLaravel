<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getArticles(){
        return view('articles');
    }
    public function getSubmitArticle(){
        return view('submitarticle');
    }
}
