<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function articles(){
        return $this->belongsTo(Articles::class, 'article_id','id');

    }
}
