<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        // この関数は、EventモデルがUserモデルに所属していることを示します。
        return $this->belongsTo(User::class);
    }

    public function attendees(): HasMany
    {
        // この関数は、AttendeeモデルがUserモデルに所属していることを示します。
        return $this->hasMany(Attendee::class);
    }
}
