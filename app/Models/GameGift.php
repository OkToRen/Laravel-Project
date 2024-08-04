<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGift extends Model
{
    use HasFactory;

    public function game(){
        return $this->belongsTo(Game::class);    
    }

    public function user1(){
        return $this->belongsTo(User::class);    
    }

    public function user2(){
        return $this->belongsTo(User::class);    
    }
}
