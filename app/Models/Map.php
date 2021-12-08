<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $fillable = [
        'blok', 'requests_id','users_id','status'
    ];

    public function user_maps()
    {
        return $this->hasOne(User::class, 'users_id', 'id');
    }

    public function details_maps()
    {
        return $this->hasOne(Request::class, 'requests_id', 'id');
    }
}
