<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEpvs extends Model
{
    use HasFactory;

    protected $table = 'form_epvs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'form_key',
    ];

    public function Xeroinvoice()
    {
        return $this->BelongsTo(XeroInvoice::class);
    }

    public function privacy()
    {
        return $this->hasOne(Privacy::class);
    }
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
    public function uploadForms()
    {
        return $this->hasMany(UploadForm::class);
    }
    public function Payment()
    {
        return $this->hasOne(Payment::class);
    }

}
