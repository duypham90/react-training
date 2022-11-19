<?php

namespace App\Services;

use App\Repositories\PostRepo;

/**
 * Class UserService
 * @package App\Services
 */
class PostService
{

    private PostRepo $postRepo;

    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getList()
    {
        return $this->postRepo->getList();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|object|null
     */
    public function findOrFail($id)
    {
        return $this->postRepo->detail($id);
    }
}
