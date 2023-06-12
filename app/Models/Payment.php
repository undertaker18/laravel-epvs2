<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function formEpvs()
    {
        return $this->belongsTo(FormEpv::class, 'form_epvs_id');
    }
}
