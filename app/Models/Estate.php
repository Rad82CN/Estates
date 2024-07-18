<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function getImageURL() {
        if($this->image) {
            return url('storage/' . $this->image);
        }
        
        return "https://api.dicebear.com/9.x/identicon/svg";
    }
}
