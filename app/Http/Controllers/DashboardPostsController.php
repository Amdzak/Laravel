<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.posts.index",[
            "posts" => Posts::where("user_id", auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        return view("dashboard.posts.detail",[
            "berita" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
