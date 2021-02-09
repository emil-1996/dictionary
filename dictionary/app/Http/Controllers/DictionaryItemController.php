<?php

namespace App\Http\Controllers;

use App\Models\DictionaryConfig;
use Illuminate\Http\Request;
use App\Models\DictionaryItem;
use App\Intefaces;

class DictionaryItemController extends Controller implements Intefaces\crud
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

    public function add(Request $request)
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

    public function changeStatus($id)
    {
        $item = DictionaryItem::find($id);
        if (empty($item)) {
            return json_encode('Nie znaleziono szukanego produktu');
        }
        return json_encode($item->update(["status" => intval(!$item['status'])]));
    }

    public function edit(Request $request)
    {
        $request->validate(['id' => "required",
            "status" => "in:1,0",
            "value" => "string"]);
        $requestData = $request->all();
        $item = DictionaryItem::find($requestData['id']);
        if (empty($item)) {
            return json_encode('Nie znaleziono szukanego produktu');
        }
        unset($requestData['id']);
        return json_encode($item->update($requestData));
    }

}
