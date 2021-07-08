<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'annonces';
    protected $fillable = [
        'title',
        'location',
        'price',
        'description',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
