<?php

namespace App\Repositories;

use App\Models\Blog\Article as Model;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogArticleRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     * получить список всех статей для вывода в списке в админке
     */
    //TODO сделать привязку к таблице articles_users, где будет храниться связь "пользователь<->статья"
    public function getAllWithPaginate($perPage = 25)
    {
        $columns = [
            'id',
            'title',
            'slug',
            'text',
            'rating',
            'views',
        ];

        $articles = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            ->paginate($perPage);
        return $articles;
    }
}
