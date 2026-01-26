<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $allUsers = User::all();
        return view('posts.create', ['users' => $allUsers]);

    }
    function store()
    {
        //1- get user data
        // $data = request()->all();
        $title = request()->title; //or this method
        $postCreator = request()->post_creator;
        // return $data;
        //2- store the submitted data in data base
        // Method 1 to add data to DB
        // $post = new post;

        // $post->title = $title;
        // $post->description = request()->description;

        // $post->save();
        // Method 2 to add data to DB
        Post::create([
            'title' => $title,
            'description' => request()->description,
            'user_id' => $postCreator
        ]);
        // 3-redirection to all posts page
        return to_route('posts.index');
    }
    public function edit(Post $post)
    {
        $allUsers = User::all();
        return view('posts.edit', ['users' => $allUsers, 'post' => $post]);
    }
    public function update($postID)
    {

        //1- get user data
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // return $data;
        //2- update the user data in data base
        // select or find the post
        $singlePostFromDB = Post::findOrFail($postID);
        // update the post data
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator

        ]);
        // 3-redirection to all posts page
        return to_route('posts.show', $postID);
    }
    public function destroy($postID)
    {
        // 1- delete post from data base
        // select or find the post      
        $post = Post::find($postID);
        $post->delete($post);

        // 2- retirect to posts.index
        return to_route('posts.index');
    }
}
