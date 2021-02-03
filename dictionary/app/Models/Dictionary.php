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
            ->select('dict_item.*', 'dict_conf.language as language', 'dict_conf.lang_code as lang_code')
            ->leftJoin('dict_conf', 'dict_item.lang_id', '=', 'dict_conf.id')
            ->get();

    }

    public static function show($id)
    {
        return DB::table('dict_item')
            ->select('dict_item.*', 'dict_conf.language as language', 'dict_conf.lang_code as lang_code')
            ->leftJoin('dict_conf', 'dict_item.lang_id', '=', 'dict_conf.id')
            ->where('dict_item.id', '=', $id)
            ->get();

    }

}
