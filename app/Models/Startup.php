<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'website', 'founded_at', 'founder'];

    public function investors()
    {
        return $this->belongsToMany(Investor::class, 'investments')->withPivot('amount')->withTimestamps();
    }
}
