<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Article;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
        $articles = Article::paginate(15);

        //Return collection of articles as a resource
        return ArticleResource::collection($articles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article();

        $article->id       =$request->input('article_id');
        $article->title    =$request->input('title');
        $article->body     =$request->input('body');

        if($article->save()){
            return new ArticleResource($article);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get Single Article
        $article = Article::findOrFail($id);

        //Return Single Article as a resource
        return new ArticleResource($article);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get Single Article
        $article = Article::findOrFail($id);

        //Delete Single Article with a resource
        if($article->delete()){
            return new ArticleResource($article);
        }
    }
}
