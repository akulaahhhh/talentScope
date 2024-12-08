<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidates extends Model
{
    use HasFactory;
    protected $table = 'candidates';
    protected $fillable = [
        'user_id',
        'fullname',
        'IC_number',
        'age',
        'status',
        'edu_level',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
