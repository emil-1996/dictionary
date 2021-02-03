<?php

namespace App\Http\Controllers;

use App\Models\DictionaryConfig;
use Illuminate\Http\Request;
use App\Models\DictionaryItem;

class DictionaryItemController extends Controller
{
    public function index()
    {
        echo DictionaryItem::all();
    }

    public function show($id)
    {
        $dictionaryItem = DictionaryItem::findOrFail($id);
        echo $dictionaryItem;
    }
}
