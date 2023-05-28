<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevelElem extends Model
{
    protected $table = 'year_level_elem';

    protected $fillable = [
        'elementary_list',
    ]; 
}
