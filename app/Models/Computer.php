<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    use HasFactory;

    protected $casts = [
        'is_laptop' => 'boolean',
        'graphic_card' => 'boolean',
        'cd_player' => 'boolean',
        'sd_card_reader' => 'boolean',
        'spotlight' => 'boolean',
    ];

    /**
     * @return HasOne<Member>
     */
    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
