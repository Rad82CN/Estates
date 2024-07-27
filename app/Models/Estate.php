<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'address',
        'dimensions',
        'floor',
        'description',
        'price',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function buyers(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_estate', 'estate_id')->withTimestamps();
    }

    public function getImageURL() {
        if($this->image) {
            return url('storage/' . $this->image);
        }
        
        return "https://api.dicebear.com/9.x/identicon/svg";
    }
}
