<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intefaces;

abstract class DictionaryAbstractController extends Controller implements Intefaces\crud
{
    protected $model;

    public function index()
    {
        echo $this->model->index();
    }

    public function show($id)
    {
        echo $this->model->show($id);
    }

    public function add(Request $request)
    {
        echo $this->model->add($request);
    }

    public function remove($id)
    {
        echo $this->model->remove($id);
    }

    public function changeStatus($id)
    {
        echo $this->model->changeStatus($id);
    }

    public function edit(Request $request)
    {
        echo $this->model->edit($request);
    }

}
