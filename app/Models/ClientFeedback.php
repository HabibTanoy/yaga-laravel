<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedback extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'client_feedbacks';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
