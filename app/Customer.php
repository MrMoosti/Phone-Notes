<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillables = ['id', 'first_name', 'last_name', 'company_id'];
}
