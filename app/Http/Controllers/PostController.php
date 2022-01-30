<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $allPosts = Post::where('title','Test')->get();
        $allPosts = Post::all(); //to retrieve all records

        return view('posts.index', [
            'allPosts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->all();

        // Post::create($data);
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            // will be ignored cause they aren't in fillable
            // 'un_known_column' => 'ajshdahsouid',
            // 'id' => 70,
        ]);// insert into (title,descripotion) values ('asdasd')

        // dd('test'); any logic after dd won't be executed
        //the logic to store post in the db
        return redirect()->route('posts.index');
    }

    public function show($postId)
    {
        //query in db select * from posts where id = $postId
        return $postId;
    }
}
