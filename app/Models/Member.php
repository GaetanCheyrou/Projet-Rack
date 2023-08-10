<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'subscription_date' => 'date',
    ];

    /**
     * Get the computer associated with the member.
     * @return HasOne<Computer>
     */
    public function computer(): HasOne
    {
        return $this->hasOne(Computer::class);
    }
}
