<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryConfig;

class DictionaryConfigController extends Controller
{
    public function show()
    {
        dd(DictionaryConfig::all());
    }
}
