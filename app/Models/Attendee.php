<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendee extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        // この関数は、EventモデルがAttendeeモデルに所属していることを示します。
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo
    {
        // この関数は、EventモデルがAttendeeモデルに所属していることを示します。
        return $this->belongsTo(Event::class);
    }
}
