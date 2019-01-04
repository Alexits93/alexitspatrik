<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    protected $table = "portfolio";
    protected $guarded = ["id"];
    use SoftDeletes;
}
