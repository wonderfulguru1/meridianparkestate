<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'first_name', 'last_name', 'mobile', 'email'
    ];

    // whitelist of filter-able columns
    protected $filter = [
        'first_name', 'last_name', 'mobile', 'email', 'created_at'
    ];


}
