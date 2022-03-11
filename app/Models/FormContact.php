<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    use HasFactory;

    protected $table = 'message_email';

    protected $fisilable = ['name', 'email', 'number_phone', 'subject', 'messaga'];
}
