<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryConfig;

class DictionaryConfigController extends Controller
{
    public function index()
    {
        echo DictionaryConfig::all();
    }
    public function show($id)
    {
        $dictionaryItem = DictionaryConfig::findOrFail($id);
        echo $dictionaryItem;
    }
}
