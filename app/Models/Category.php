<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function categoryType()
    {
        return $this->hasMany(CategoryType::class);
    }
    public function listing()
    {
        return $this->hasMany(Listing::class);
    }
}
