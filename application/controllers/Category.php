<?php

namespace Application\Controllers;

use Application\Model\Category as CategoryModel;

class Category extends Controller
{

    public function index()
    {
        $category = new CategoryModel();
        $categories = $category->all();
        return $this->view('panel.category.index', compact('categories'));
    }
    public function create()
    {
        return $this->view('panel.category.create');
    }
    public function store()
    { 
        $category = new CategoryModel();
        $category->insert($_POST);
        return $this->redirect('category');
    }
    public function show($id)
    {
        $selectedCategory= new CategoryModel();
        $category= $selectedCategory->find($id);
        return $this->view('panel.category.show' , compact('category'));
        //tiny mvc has no show page
    }
    public function edit($id)
    {
        $selectedCategory= new CategoryModel();
        $category= $selectedCategory->find($id);
        return $this->view('panel.category.edit' , compact('category'));
    }
    public function update($id)
    {
        $category = new CategoryModel();
        $category->update($id,$_POST);
        return $this->redirect('category');
    }
    public function delete($id)
    {
        $category = new CategoryModel();
        $category->delete($id);
        return $this->back();
    }
}
