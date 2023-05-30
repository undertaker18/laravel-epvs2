<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevelCollege extends Model
{
    protected $table = 'year_level_college';

    protected $fillable = [
        'college_list',
    ]; 
}
