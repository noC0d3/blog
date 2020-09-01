<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;

    /**
     * PostController constructor.
     * @param PostRepositoryInterface $post
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return [
            'posts' => $this->post->all()
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return "data";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $this->post->store($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $postId
     */
    public function update(Request $request, int $postId)
    {
        $this->post->update($postId, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $postId
     */
    public function destroy(int $postId)
    {
        $this->post->delete($postId);
    }
}
