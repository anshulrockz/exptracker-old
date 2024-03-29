<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class workshop extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function Company()
    {
        return $this->belongsTo('App\Company', 'wwwid');
    }
}
