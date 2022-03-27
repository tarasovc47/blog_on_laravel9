<?php

namespace App\Http\Controllers\Blog\Admin;


use App\Models\Blog\Article;
use App\Repositories\BlogArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    /**
     * @var BlogArticleRepository
     */
    private $blogArticleRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogArticleRepository = app(BlogArticleRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = $this->blogArticleRepository->getAllWithPaginate();
        return view('blog.admin.articles.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__, $request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, BlogArticleRepository $articleRepository)
    {
        $article = $articleRepository->getEdit($id);
        if (empty($article)) {
            abort(404);
        }
        return view('blog.admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd(__METHOD__, $request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__, $id);
    }
}
