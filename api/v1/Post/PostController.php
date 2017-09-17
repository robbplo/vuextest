<?php

namespace Api\v1\Post;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return $this->resource(Post::all());
    }

}