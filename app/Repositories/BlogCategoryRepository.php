<?php

namespace App\Repositories;

use App\Models\Blog\Category as Model;

class BlogCategoryRepository extends CoreRepository
{
    /**
     * получить модель для редактирования в админке
     * @param int $id
     * @return Model
     */
    public function getEdit(int $id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * @return string
     */
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
