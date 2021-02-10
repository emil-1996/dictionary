<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Intefaces;
use Illuminate\Http\Request;

class DictionaryConfig extends Model implements Intefaces\crud
{
    use HasFactory;

    protected $table = "dict_conf";
    protected $fillable = ["language", "lang_code", "status"];

    public function index()
    {
        return DictionaryConfig::all()->where("status", "=", "1");
    }

    public function show($id)
    {
        return DictionaryConfig::all()
            ->where("id", "=", $id)
            ->where("status", "=", "1");
    }

    public function add(Request $request)
    {
        $request->validate(['lang_code' => "required",
            "language" => "required"]);
        return json_encode(DictionaryConfig::create($request->all()));
    }

    public function remove($id)
    {
        return DictionaryConfig::find($id)?->delete();
    }

    public function changeStatus($id)
    {
        $item = DictionaryConfig::find($id);
        if (empty($item)) {
            return json_encode(['error' => "Nie znalezionego szukanego produktu"]);
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
            return json_encode(['error' => "Nie znalezionego szukanego produktu"]);
        }
        unset($requestData['id']);
        return json_encode($item->update($requestData));
    }
}
