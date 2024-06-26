<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_partner');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function coitions(): BelongsToMany
    {
        return $this->belongsToMany(Coition::class, 'coition_partner');
    }
}
