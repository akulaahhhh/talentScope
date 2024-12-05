<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $table = 'organizer';
    protected $fillable = [
        'user_id',
        'org_name',
        'ssm',
        'type',
        'description',
        'logo',
    ];
}
