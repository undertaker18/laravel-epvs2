<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $fillable = ['privacy_notice'];

    public function formEpv()
    {
        return $this->belongsTo(FormEpv::class);
    }
}
