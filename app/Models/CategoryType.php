<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(CategoryType::class);
    }
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
    public function jobRequest()
    {
        return $this->hasMany(JobRequest::class);
    }
}
