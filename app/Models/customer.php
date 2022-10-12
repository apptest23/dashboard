<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table ='client_list';

      protected $fillable = [
      	'image',
        'client_source',
        'client_name',
        'company_name',
        'mobile_no',
        'email',
        'website',
    ];
}
