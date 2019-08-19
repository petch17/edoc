<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $table = 'objective';
    // public $timestamps = false;

    public function objective() {
        return $this->hasMany(Objective::class);
     }
}
