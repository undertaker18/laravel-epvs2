<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevelJunior extends Model
{
    protected $table = 'year_level_junior';

    protected $fillable = [
        'junior_high_list',
    ]; 
}
