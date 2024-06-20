<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model implements FilamentUser
{
    use HasFactory;

    protected $fillable = [
        'fname','lname','sname','phone_number','dob','role_id','territory_id','password'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function territory(){
        return $this->belongsTo(Territory::class);
    }

    public function contribution()
    {
        return $this->hasMany(Contribution::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->sname} {$this->lname}";
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return Auth::user()->can($panel);
    }
}
