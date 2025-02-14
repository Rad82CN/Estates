<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        'name',
        'image',
        'bio',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function estates() {
        return $this->hasMany(Estate::class)->latest();
    }

    public function contracts() {
        return $this->hasMany(Contract::class)->latest();
    }

    public function boughtEstates(): BelongsToMany {
        return $this->belongsToMany(Estate::class, 'user_estate', 'user_id')->withTimestamps();
    }

    public function bought(Estate $estate) {
        return $this->boughtEstates()->where('estate_id', $estate->id)->exists();
    }

    public function sentContracts(): BelongsToMany {
        return $this->belongsToMany(Contract::class, 'buyer_contract', 'buyer_id', 'contract_id')->withTimestamps();
    }

    public function sent(Contract $contract) {
        return $this->sentContracts()->where('contract_id', $contract->id)->exists();
    }

    public function getImageURL() {
        if($this->image) {
            return url('storage/' . $this->image);
        }
        
        return "https://api.dicebear.com/6.x/fun-emoji/svg?seed={$this->name}";
    }
}
