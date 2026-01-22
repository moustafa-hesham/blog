<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class PostsController extends Controller
{
    public function index()
    {
        $all_posts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'Moustafa', 'created_at' => '2022-10-10 09:00:00'],
            ['id' => 2, 'title' => 'Laravel', 'posted_by' => 'Mona', 'created_at' => '2023-01-15 14:30:00'],
            ['id' => 3, 'title' => 'JavaScript', 'posted_by' => 'Youssef', 'created_at' => '2023-05-22 18:45:00'],
            ['id' => 4, 'title' => 'Python', 'posted_by' => 'Sara', 'created_at' => '2024-02-03 11:20:00'],
        ];

        return view('posts.index', ['posts' => $all_posts]);
    }

    public function show()
    {
        $single_post = [
            'id' => 1,
            'title' => 'Python',
            'posted_by' => 'Moustafa',
            'created_at' => '2022-10-10 09:00:00',
            'description' => 'This is description'
        ];
        return view('posts.show', ['post' => $single_post]);
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
}
