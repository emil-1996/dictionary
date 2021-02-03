<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictionaryConfig extends Model
{
    use HasFactory;

    protected $table = "dict_conf";
    protected $fillable = ["language", "lang_code"];
}
