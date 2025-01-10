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
        'SME' => 'Small and Medium Enterprise',
        'NGO' => 'Non-Governmental Organization',
        'INSTITUTION' => 'Institution',
        'OTHERS' => 'Others',
    ];
}
