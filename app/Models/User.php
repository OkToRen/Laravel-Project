<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Email',
        'Password',
        'UniqueCode',
        'CountryID',
        'Role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

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

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function walletCode(){
        return $this->hasOne(WalletCode::class);
    }

    public function itemLibrary(){
        return $this->hasMany(ItemLibrary::class);
    }

    public function friendRequest1(){
        return $this->hasMany(FriendRequest::class);
    }

    public function friendRequest2(){
        return $this->hasMany(FriendRequest::class);
    }

    public function friendList1(){
        return $this->hasMany(Friendlist::class);
    }

    public function friendList2(){
        return $this->hasMany(Friendlist::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function gameGiftUser1(){
        return $this->hasMany(GameGift::class);
    }

    public function gameGiftUser2(){
        return $this->hasMany(GameGift::class);
    }
}
