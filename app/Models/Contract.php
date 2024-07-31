<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'estate_id',
        'phone_number',
        'seller_name',
        'buyer_name',
        'seller_id_number',
        'buyer_id_number',
        'description',
        'seller_address',
        'buyer_address',
    ];
}
