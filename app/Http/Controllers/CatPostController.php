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
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|string',
//            'description' => 'required|string',
//            'type' => 'required|integer',
//            'genres' => 'required|array',
//            'images.*' => 'exists:genres,id',
//
//        ]);
//        $catPost = new CatPost;
//        $catPost->name = $request->name;
//
//        $catPost->save();
//        $catPost->genres()->attach($request->genres);
//        return response()->json([
//            'status' => true,
//            'message' => "Post Created successfully!",
//            'post' => $catPosts
//        ], 200);
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
