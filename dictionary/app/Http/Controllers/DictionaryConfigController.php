<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryConfig;

class DictionaryConfigController extends DictionaryAbstractController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DictionaryConfig();
    }
}
