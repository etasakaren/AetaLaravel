<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'author' => 'required',
            'title' => 'required',
            'contentarticle' => 'required',
        ]);
        
        //Create new article
        $article = new Article;
        $article->author = $request->input('author');
        $article->title = $request->input('title');
        $article->contentarticle = $request->input('contentarticle');
            
        //Save article
        $article->save();

        //Redirect
        return redirect('/')->with('success', 'Thank you for posting an article! Article has been posted.');
    } 

    public function getArticle(){
        $article = Article::all();

        return view('article')->with('article', $article);
    }
}
