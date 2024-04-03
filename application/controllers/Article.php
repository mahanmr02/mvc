<?php

namespace Application\Controllers;

use Application\Model\Category;
use Application\Model\Article as ArticleModel;

class Article extends Controller
{

    public function index()
    {
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->view('panel.article.index' , compact('articles'));
    }
    public function create()
    {
        $category= new Category();
        $categories = $category->all();
        return $this->view('panel.article.create' , compact('categories'));

    }
    public function store()
    {
        $article = new ArticleModel();
        $article->insert($_POST);
        return $this->redirect('article/index/');
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $category= new Category();
        $categories = $category->all();
        $selectedArticle = new ArticleModel();
        $article= $selectedArticle->find($id);
        return $this->view('panel.article.edit' , compact('categories','article'));
    }
    public function update($id)
    {
        $selectedArticle = new ArticleModel();
        $selectedArticle->update($id,$_POST);
        return $this->redirect('article');
    }
    public function delete($id)
    {
        $selectedArticle = new ArticleModel();
        $selectedArticle->delete($id);
        return $this->back();
    }
}
