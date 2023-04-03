<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Group;
use App\Models\Team;

class Character extends Model
{
    protected $fillable = ['name', 'description', 'speciality', 'user_id', 'mag', 'for', 'agi','int','pv',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


public function groups()
{
    return $this->belongsToMany(Group::class);
}

public function teams()
{
    return $this->belongsToMany(Team::class);
}
}