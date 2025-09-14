<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city',
        'state',
        'loan_amount',
        'business_type',
        'loan_category',
        'collateral',
    ];
}
