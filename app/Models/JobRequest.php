<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
