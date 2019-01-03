<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    protected $guarded = ["id"];
    use SoftDeletes;

    public function getFullnameAttribute(){
        return $this->firstname.' '.$this->lastname;
    }
}
