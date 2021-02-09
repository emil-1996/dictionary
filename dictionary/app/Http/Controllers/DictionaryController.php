<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function index()
    {
        return Dictionary::getAll();
    }

    public function show($id)
    {
        return Dictionary::show($id);
    }

    public function renderIndex()
    {
        $data = json_decode($this->index());
        return view("index", compact('data'));
    }

}
