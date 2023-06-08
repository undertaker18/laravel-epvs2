<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadForm extends Model
{
    use HasFactory;

    protected $table = 'uploadform';

    public function formEpvs()
    {
        return $this->belongsTo(FormEpvs::class);
    }
}
