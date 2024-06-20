<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','event_id','amount'];

    public function user()
    {
        return $this->belongsTo(AppUser::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
