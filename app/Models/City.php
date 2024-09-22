<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'pk_i_id';

    public function jobRequest()
    {
        return $this->hasMany(JobRequest::class, 'fk_i_region_id', 'pk_i_id');
    }
}
