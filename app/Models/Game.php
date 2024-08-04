<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function gameReview(){
        return $this->hasMany(GameReview::class);
    }

    public function gameLibrary(){
        return $this->hasMany(GameLibrary::class);
    }

    public function gameCart(){
        return $this->hasMany(GameCart::class);
    }

    public function gameWishlist(){
        return $this->hasMany(GameWishlist::class);
    }

    public function gameGift(){
        return $this->hasMany(gameGift::class);
    }

    public function gameImage(){
        return $this->hasMany(GameImage::class);
    }

    public function gameGenre(){
        return $this->hasMany(GameGenre::class);
    }

    public function ageRating(){
        return $this->belongsTo(AgeRating::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
