<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEpv extends Model
{
    use HasFactory;

    // protected $table = 'form_epvs';

    // public function Xeroinvoice()
    // {
    //     return $this->BelongsTo(XeroInvoice::class);
    // }

    protected $fillable = ['box'];

    public function privacy()
    {
        return $this->hasOne(Privacy::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }

    public function uploadForm()
    {
        return $this->hasMany(UploadForm::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

}
