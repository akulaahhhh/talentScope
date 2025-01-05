<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class programs extends Model
{
    use HasFactory;

    protected $table = 'programs';
    protected $fillable = [
        'user_id',
        'description',
        'date',
        'title',
        'total_participant',
        'location',
    ];

    public function organizer() : BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }
}