<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\AdminPanel;
use App\User;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {



            $users = User::where('id', '>', 0)->count();

            return view('artuz.layouts.makets.admin.site.index', compact('users'));



            // barcha kiritilgan yangiliklarni sanaydi.
        // $users = User::join('articles', 'users.id', '=', 'articles.user_id')
        // ->select(DB::raw('count(articles.*) as articles_count'))
        // ->orderBy('articles_count', 'desc')
        // ->get();

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
     * @param  \App\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function show(AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminPanel $adminPanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminPanel  $adminPanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminPanel $adminPanel)
    {
        //
    }
}
