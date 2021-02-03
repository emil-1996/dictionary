<?php

namespace App\Http\Controllers;

use App\Models\DictionaryConfig;
use Illuminate\Http\Request;
use App\Models\DictionaryItem;

class DictionaryItemController extends Controller
{
    public function index()
    {
        echo DictionaryItem::all()->where("status", "=", "1");
    }

    public function show($id)
    {
        echo DictionaryItem::all()
            ->where("id", "=", $id)
            ->where("status", "=", "1");
    }

    public function create(Request $request)
    {
        $request->validate(['lang_id' => "required",
            "value" => "required"]);

        $result = DictionaryConfig::where('id', '=', $request->all()['lang_id'])->count();
        if (empty($result)) {
            return json_encode('Nie można dopasować lang_id do istniejącego słownika');
        }

        echo json_encode(DictionaryItem::create($request->all()));
    }

    public function delete($id)
    {
        echo DictionaryItem::find($id)?->delete();
    }
}
