<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class PostsController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();

        return view('posts.index', ['posts' => $postsFromDB]);
    }

    public function show(Post $post) // type hinting
    {
        // $single_postFromDB = Post::findOrFail($postID);


        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        return view('posts.create');
    }
    function store()
    {
        //1- get user data
        $data = request()->all();
        // return $data;
        //2- store the user data in data base
        // 3-redirection to all posts page
        return to_route('posts.index');
    }
    public function edit()
    {

        return view('posts.edit');
    }
    public function update()
    {

        //1- get user data
        $data = request()->all();
        // return $data;
        //2- update the user data in data base
        // 3-redirection to all posts page
        return to_route('posts.show', 1);
    }
    public function destroy()
    {
        // 1- delete post from data base
        // 2- retirect to posts.index
        return to_route('posts.index');
    }
}
