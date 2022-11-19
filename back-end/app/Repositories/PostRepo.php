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
        return $this->model->with(['cate:cate_id,cate_name', 'image:id,image_url', 'user:id,name'])->paginate();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function detail($id)
    {
        return $this->model->with(['cate:cate_id,cate_name', 'image:id,image_url', 'user:id,name'])->find($id);
    }
}
