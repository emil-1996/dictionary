<?php

namespace App\Http\Controllers;

use App\Models\DictionaryConfig;
use Illuminate\Http\Request;
use App\Models\DictionaryItem;
use App\Intefaces;

class DictionaryItemController extends Controller implements Intefaces\crud
{
    private $model;

    public function __construct()
    {
        $this->model = new DictionaryItem();
    }

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
