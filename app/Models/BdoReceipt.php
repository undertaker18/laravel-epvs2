<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class BdoReceipt extends Model
{
    protected $table = 'bdo_receipt';

    protected $fillable = [
        'posting_datetime',
        'branch',
        'description',
        'debit',
        'credit',
        'running_balance',
        'check_number',
    ];

    public function setPostingDatetimeAttribute($value)
    {
        $carbon = Carbon::createFromFormat('m/d/Y H:i A', $value, 'America/New_York');
        $this->attributes['posting_datetime'] = $carbon->format('Y-m-d H:i:s');
    }
    
    
    
    
}
