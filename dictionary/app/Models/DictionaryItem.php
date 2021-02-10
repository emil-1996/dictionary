<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Intefaces;
use Illuminate\Http\Request;

class DictionaryItem extends Model implements Intefaces\crud
{
    use HasFactory;

    protected $table = "dict_item";
    protected $fillable = ["lang_id", "value", "status"];

    public function index()
    {
        return DictionaryItem::all()->where("status", "=", "1");
    }

    public function show($id)
    {
        return DictionaryItem::all()
            ->where("id", "=", $id)
            ->where("status", "=", "1");
    }

    public function add(Request $request)
    {
        $request->validate(['lang_id' => "required",
            "value" => "required"]);

        $result = DictionaryConfig::where('id', '=', $request->all()['lang_id'])->count();
        if (empty($result)) {
            return json_encode(['error' => "Nie można dopasować lang_id do istniejącego słownika"]);
        }

        return json_encode(DictionaryItem::create($request->all()));
    }

    public function remove($id)
    {
        return DictionaryItem::find($id)?->delete();
    }

    public function changeStatus($id)
    {
        $item = DictionaryItem::find($id);
        if (empty($item)) {
            return json_encode(['error' => "Nie znaleziono szukanego produktu"]);
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
            return json_encode(['error' => "Nie znaleziono szukanego produktu"]);
        }
        unset($requestData['id']);
        return json_encode($item->update($requestData));
    }
}
