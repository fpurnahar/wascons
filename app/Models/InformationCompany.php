<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCompany extends Model
{
    use HasFactory;

    protected $table = 'information_companies';

    protected $fisilable = ['company_name', 'company_email', 'company_number_phone', 'company_facebook', 'company_instagram', 'company_linkedin', 'company_logo', 'company_pdf'];
}
