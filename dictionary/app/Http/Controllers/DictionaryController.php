<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function show()
    {
        dd(Dictionary::getAllWords());
    }
}
