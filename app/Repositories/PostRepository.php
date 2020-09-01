<?php

namespace App\Repositories;

use App\Post;

class PostRepository implements PostRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function get($postId)
    {
        return Post::find($postId);
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return Post::all();
    }

    public function store($data)
    {
        Post::create($data);
    }

    /**
     * @inheritDoc
     */
    public function delete($postId)
    {
        Post::destroy($postId);
    }

    /**
     * @inheritDoc
     */
    public function update($postId, array $postData)
    {
        Post::find($postId)->update($postData);
    }
}
