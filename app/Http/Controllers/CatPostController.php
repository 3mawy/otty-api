<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatPostRequest;
use App\Http\Requests\UpdateCatPostRequest;
use App\Models\CatPost;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CatPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $catPosts = CatPost::all();

        return response()->json([
            'status' => true,
            'posts' => $catPosts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCatPostRequest $request
     * @return JsonResponse
     */
    public function store(StoreCatPostRequest $request): JsonResponse
    {
        $catPosts = CatPost::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'post' => $catPosts
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CatPost $catPost
     * @return JsonResponse
     */
    public function destroy(CatPost $catPost): JsonResponse
    {
        $catPost->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
