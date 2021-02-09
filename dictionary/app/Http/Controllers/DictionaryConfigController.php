<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryConfig;
use App\Intefaces;

class DictionaryConfigController extends Controller implements Intefaces\crud
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

    public function add(Request $request)
    {
        $request->validate(['lang_code' => "required",
            "language" => "required"]);
        echo json_encode(DictionaryConfig::create($request->all()));
    }

    public function delete($id)
    {
        echo DictionaryConfig::find($id)?->delete();
    }

    public function changeStatus($id)
    {
        $item = DictionaryConfig::find($id);
        if (empty($item)) {
            return json_encode('Nie znaleziono szukanego produktu');
        }
        return json_encode($item->update(["status" => intval(!$item['status'])]));
    }

    public function edit(Request $request)
    {
        $request->validate(['id' => "required",
            "status" => "in:1,0",
            "lang_code" => "string",
            "language" => "string"]);
        $requestData = $request->all();
        $item = DictionaryConfig::find($requestData['id']);
        if (empty($item)) {
            return json_encode('Nie znaleziono szukanego produktu');
        }
        unset($requestData['id']);
        return json_encode($item->update($requestData));
    }

}
