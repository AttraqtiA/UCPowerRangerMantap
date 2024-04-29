<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function userMission(){
        return $this->hasMany(UserMission::class, 'mission_id', 'id');
    }
}