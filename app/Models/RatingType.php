<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingType extends Model
{
    use HasFactory;

    public function gameReview(){
        return $this->hasMany(GameReview::class);
    }
}
