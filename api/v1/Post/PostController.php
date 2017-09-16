<?php

namespace Api\v1\Post;

use Api\v1\ApiController;
use App\Post;

class PostController extends ApiController
{
    public function index()
    {
        return $this->resource(Post::all());
    }

}