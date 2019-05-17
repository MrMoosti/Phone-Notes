<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'created_for', 'status_id', 'company_id', 'customer_id', 'subject', 'phonenumber', 'message', 'created_at', 'updated_at'
    ];
}
