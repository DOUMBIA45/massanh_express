<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    use HasFactory;
    public function albums(){
        return $this->belongsTo(Album::class,'album_id','id');
    }
}
