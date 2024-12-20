<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reports extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function Statuses(): BelongsTo{
        return $this->belongsTo(statuses::class);
    }
}
