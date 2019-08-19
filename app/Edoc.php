<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edoc extends Model
{
    protected $table = 'edocs';
    protected $fillable = ['number','date','topic','booknum','edoc_type','start','end','detail','file'
                            ,'retirement','position','important','status','objective_id'];
    // public $timestamps = false;

    public function edoc() {
        return $this->belongsTo(Edoc::class, 'objective_id');
    }
}
