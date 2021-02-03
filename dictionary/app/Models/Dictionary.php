<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dictionary extends Model
{
    use HasFactory;

    static public function getAllWords(): \Illuminate\Support\Collection
    {
        return DB::table('dict_item')
            ->leftJoin('dict_conf', 'dict_item.lang_id', '=', 'dict_conf.id')
            ->get();

    }
}
