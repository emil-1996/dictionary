<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryConfig;

class DictionaryConfigController extends Controller
{
    public function index()
    {
        echo DictionaryConfig::all()->where("status", "=", "1");
    }

    public function show($id)
    {
        echo DictionaryConfig::all()
            ->where("id", "=", $id)
            ->where("status", "=", "1");
    }

    public function create(Request $request)
    {
        $request->validate(['lang_code' => "required",
            "language" => "required"]);
        echo json_encode(DictionaryConfig::create($request->all()));
    }

    public function delete($id)
    {
        echo DictionaryConfig::find($id)?->delete();
    }

}
