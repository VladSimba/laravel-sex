<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orgasm extends Model
{
    use HasFactory;

    protected $fillable = [
        'count'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function coition(): BelongsTo
    {
        return $this->belongsTo(Coition::class);
    }
}
