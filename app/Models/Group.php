<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Character;

class Group extends Model
{
    use HasFactory;




protected $fillable = [

    'name',
     'description', 
     'size',
];

public function characters()
{
    return $this->belongsToMany(Character::class);
}

public function owner()
{
    return $this->belongsTo(User::class, 'user_id');
}
}