<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpvsForm extends Model
{
    use HasFactory;

    protected $table = 'epvs_forms';

    protected $fillable = [
        'payments_for1',
        'payments_for2',
        'payments_for3',
        'each_amount1',
        'each_amount2',
        'each_amount3',
        'receipt_type',
        'receipt_filename',
        'reference',
        'amount',
        'date',
        'time',
    ];
}

