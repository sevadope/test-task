<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBonus extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'user_bonus_id', 'user_bonus_user');
    }
}
