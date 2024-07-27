<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'seller_name',
        'buyer_name',
        'seller_id_number',
        'buyer_id_number',
        'description',
        'seller_address',
        'buyer_address',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
