<?php

namespace App\Models;

use App\Enums\CoitionsTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coition extends Model
{
    protected $fillable = [
        'type',
        'comment',
        'date_time',
    ];

    protected $casts = [
        'type' => CoitionsTypeEnum::class,
    ];

    public function positions(): BelongsToMany
    {
        return $this->belongsToMany(Position::class, 'coition_position');
    }

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class, 'coition_partner');
    }
}
