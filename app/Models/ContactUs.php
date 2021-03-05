<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class ContactUs extends Model
{
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'phone_number',
        'subject',
        'message',
    ];
}
