<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','category','date','location','user_id',
    ];

    public function user()
    {
        return $this->hasMany(AppUser::class);
    }

    public function contribution()
    {
        return $this->hasMany(Contribution::class);
    }
}
