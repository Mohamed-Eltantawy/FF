<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment_rounds extends Model
{
    use HasFactory;


    protected $fillable = ['amount', 'startup_id', 'investor_id'];

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
}
