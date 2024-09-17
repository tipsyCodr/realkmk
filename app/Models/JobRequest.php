<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function city()
    {
        return $this->hasOne(City::class);
    }
    public function state()
    {
        return $this->hasOne(state::class);
    }
}
