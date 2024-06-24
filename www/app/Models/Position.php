<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Position extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function coitions(): BelongsToMany
    {
        return $this->belongsToMany(Coition::class, 'coition_position');
    }
}
