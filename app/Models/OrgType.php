<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgType extends Model
{
    // use HasFactory;
    public const TYPES = [
        'MNC' => 'Multinational Corporation',
        'GLC' => 'Government-Linked Company',
        'Institution' => 'Institution',
        'SME' => 'Small and Medium Enterprise',
        'Others' => 'Others',
    ];
}
