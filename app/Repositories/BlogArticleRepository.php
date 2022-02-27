<?php

namespace App\Repositories;

use App\Models\Blog\Article as Model;

class BlogArticleRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate($perPage = null)
    {
        $columns = ['id', 'title'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->paginate($perPage);
        return $result;
    }
}
