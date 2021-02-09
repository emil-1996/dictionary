<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryItem;

class DictionaryItemController extends DictionaryAbstractController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DictionaryItem();
    }

    public function renderAddItem()
    {
        return view("newItem");
    }
}
