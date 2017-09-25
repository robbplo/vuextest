<?php

namespace Api\v1\Post;

use Api\v1\ApiController;
use App\Post;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return $post;
    }

    public function update(Post $post, Request $request)
    {
        $post = $post->update($request->all());

        return $post;
    }

    public function destroy(Post $post)
    {
        return $this->respondWithSuccess();
    }
}