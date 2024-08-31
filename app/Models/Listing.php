<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
