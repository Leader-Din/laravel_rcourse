<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\storePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::select('id', 'title', 'content')->get();
        return response()->json([
            "message" => "List Post Successfully",
            "data" => $posts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storePostRequest $request)
    {
        $post = Post::store($request);

        return response()->json([
            'message' => 'Create Post Successfully',
            'data' => $post
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id)->select('id', 'title', 'content')->first();
        return response()->json([
            "message" => "Get Post Successfully",
            "data" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(storePostRequest $request, string $id)
    {

        $post = Post::store($request, $id);

        return response()->json([
            'message' => 'Update Successfully',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json([
            'message' => 'Delete Post Successfully',
            'data' => true
        ]);
    }
}
