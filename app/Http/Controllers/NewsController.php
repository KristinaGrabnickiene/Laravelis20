<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewsItem;
use App\Comment;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = NewsItem::all();
        //Gaunu naujienu skaiciu
        $newsCount =  NewsItem::count(); // grazins skaiciu 

        
            return view("news" , [
                "news" => $news, 
                 "newsCount" => $newsCount
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            // Kreipiames i modeli NewsItem
            /* Modelio dokumentacija :
            https://laravel.com/docs/5.6/eloquent
            */
        $newsItem = NewsItem::find($id);
        
        // nes prijungiu migracijoje ir modelyje 2 lentele
        // $allComments = Comment::where("news_id", $id)->get();
         $commentCount = Comment::where("news_id", $id)->count();




       // $allComments = Comment::where("news_id", $id)->get();
       
        return view('newsItem', [
            "newsItem" => $newsItem
            //nes prijungiu migracijoje ir modelyje 2 lentele
            // "comments" => $allComments,
            // "commentCount" => $commentCount
       ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
