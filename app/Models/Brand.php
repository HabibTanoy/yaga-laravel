<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'brands';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
