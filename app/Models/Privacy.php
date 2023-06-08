<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $table = 'privacy';

    public function formEpvs()
    {
        return $this->belongsTo(FormEpvs::class);
    }
}
