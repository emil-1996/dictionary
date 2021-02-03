<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function index()
    {
        echo Dictionary::getAll();
    }

    public function show($id)
    {
        echo Dictionary::show($id);
    }

}
