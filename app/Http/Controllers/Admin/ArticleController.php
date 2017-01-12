<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Auth;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest('published_at')->paginate(10);

        return view('adminpanel.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('adminpanel.articles.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        //Article::create($request->all());
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);

        \Session::flash('flash_article_positive', trans('adminpanel.article_store'));

        return redirect()->action('Admin\ArticleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the article.
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('adminpanel.articles.edit', compact('article'));
    }

    /**
     * Update the article in storage.
     *
     * @param $id
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->except('published_at'));

        \Session::flash('flash_article_positive', trans('adminpanel.article_update'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Article::destroy($id);

        \Session::flash('flash_article_positive', trans('adminpanel.article_delete'));

        return redirect()->action('Admin\ArticleController@index');
    }
}
