<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts()
    {
//    ELQ - Post::all()->pluck('created_by'); = SQL -  select created_by from posts
//    ELQ - Post::where('id', 4)->get(); = SQL -  select * from posts where id = 4;

        return Post::where('id', 4)->get();
    }
}
