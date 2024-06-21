<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function startups()
    {
        return $this->belongsToMany(Startup::class, 'investments')->withPivot('amount')->withTimestamps();
    }
}
