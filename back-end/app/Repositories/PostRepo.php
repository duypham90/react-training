<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepo extends EloquentRepo
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getList()
    {
        return $this->model->with(['cate:cate_name', 'image:image_url', 'user:name'])->paginate();
    }
}
