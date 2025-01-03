<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['name', 'number'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
