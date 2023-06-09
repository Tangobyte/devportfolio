<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'RateAttractiveness',
        'RateEasyOfUse',
        'RateNavigation',
        'RateCleanAndSimple',
        'RateUserExperience',
        'AnythingToAdd',
        'OpenRemark',
    ];

}
