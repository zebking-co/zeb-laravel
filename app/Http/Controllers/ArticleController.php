<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $article = Article::take(4)->latest()->get();
        return view ('articles.index',[
            'articles'=>$article
        ]);
    }
    public function show($id){
        $article=Article::find($id);
        return view('articles.show',[
        'articles'=>$article]);
    }
    Public function create(){    
       return view('articles.create');
    }

    public function store(){

        request()->validate([
            'colomn'=>'required',
            'title'=> 'required',
            'excerpt'=>'required',
            'body'=> 'required', 

        ]);

        $article = new Article();
        $article->colomn=request('colomn');
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();
        return redirect('articles');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
        
    }
    public function update($id){
        $article = Article::find($id);

        request()->validate([
            'colomn' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'body'=>'required',

        ]);

        $article->colomn=request('colomn');
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();
        return redirect('/articles/'.$article->id);


    }
}