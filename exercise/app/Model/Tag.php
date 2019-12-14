<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // tags that cannot be bulk added
    protected $guarded = [];
}
