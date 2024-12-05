<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'mobile',
        'state',
        'city',
        'area',
        'experience',
        'bank_name',
        'account_number',
        'ifsc_code',
        'pan_card',
        'aadhar_card',
        'passport_photo',
        'is_verified'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
