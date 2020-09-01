<?php

namespace App\Repositories;

interface PostRepositoryInterface
{

    /**
     * @param array $data
     * @return mixed
     */
    public function store(array $data);

    /**
     * @param int
     * @return mixed
     */
    public function get($postId);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param int
     * @return mixed
     */
    public function delete($postId);

    /**
     * @param int
     * @param array $postData
     * @return mixed
     */
    public function update($postId, array $postData);
}
