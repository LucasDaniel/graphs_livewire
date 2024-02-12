<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    public static function getAllLevelIsNotOwner() {
        return UserLevel::where('level','!=','Owner')->get();
    }
}
