<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;

    protected $guarded = [];

    //A UNO INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }


}
