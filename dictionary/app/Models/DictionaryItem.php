<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictionaryItem extends Model
{
    use HasFactory;

    protected $table = "dict_item";
    protected $fillable = ["lang_id", "value", "status"];
}
