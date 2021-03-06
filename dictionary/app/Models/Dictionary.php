<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dictionary extends Model
{
    use HasFactory;

    public static function getAll(): \Illuminate\Support\Collection
    {
        return DB::table('dict_item')
            ->select('dict_item.id', 'dict_item.value', 'dict_item.created_at','dict_item.updated_at', 'dict_item.status','dict_conf.language as language', 'dict_conf.lang_code as lang_code')
            ->leftJoin('dict_conf', 'dict_item.lang_id', '=', 'dict_conf.id')
            ->where('dict_item.status', '=', "1")
            ->where('dict_conf.status', '=', "1")
            ->get();

    }

    public static function show($id)
    {
        return DB::table('dict_item')
            ->select('dict_item.*', 'dict_conf.language as language', 'dict_conf.lang_code as lang_code')
            ->leftJoin('dict_conf', 'dict_item.lang_id', '=', 'dict_conf.id')
            ->where('dict_item.id', '=', $id)
            ->where('dict_item.status', '=', "1")
            ->where('dict_conf.status', '=', "1")
            ->get();

    }

}
