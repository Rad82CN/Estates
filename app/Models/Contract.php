<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'id_number',
        'description',
        's_address',
        'b_address',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
