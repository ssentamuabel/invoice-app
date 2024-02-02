<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{


    protected $fillable = [
        'total',
        'customer_id',
        'sub_total',
        'date',
        'due_date',
        'reference',
        'discount',
        'number',
        'terms and conditions'

    ];



    use HasFactory;
}
