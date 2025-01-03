<?php

namespace App\Models;

use App\SeriesStatus;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = ['name', 'status'];

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }

    protected function casts(): array
    {
        return ['status' => SeriesStatus::class];
    }
}
