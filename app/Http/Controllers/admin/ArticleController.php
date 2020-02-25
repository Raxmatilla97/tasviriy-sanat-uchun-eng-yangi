<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(5);


        $users = User::leftJoin('articles', 'users.id', '=', 'articles.user_id')

        ->take(5)
            //->select('users.id', 'contacts.phone', 'orders.price')
            ->get();




        // $users = User::leftJoin('articles', 'articles.user_id', '=', 'users.id')


        // ->get();


         // dd($yangiliklar);
        //dd($article->title);
        // foreach($user2 as $item){
        //     dump($item->key);

        // }


    return view('artuz.layouts.admin.views.articles-list', compact('articles','users'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('artuz.layouts.admin.creaters.yangiliklar');
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
