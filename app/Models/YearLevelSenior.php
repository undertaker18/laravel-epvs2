<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevelSenior extends Model
{
    protected $table = 'year_level_senior';

    protected $fillable = [
        'senior_high_list',
    ]; 
}
