<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class statuses extends Model
{
    use HasFactory;

    public function reports(): HasMany{
        return $this->hasMany(Reports::class);
    }
}
