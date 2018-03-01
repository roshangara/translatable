<?php

namespace Roshangara\Translatable\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public $fillable = ['key', 'locate', 'value'];
}
