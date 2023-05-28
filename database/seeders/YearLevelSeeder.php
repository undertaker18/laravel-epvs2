<?php

namespace Database\Seeders;
use App\Models\YearLevelElem;
use App\Models\YearLevelJunior;
use App\Models\YearLevelSenior;
use App\Models\YearLevelCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seed your data here
         // Elementary
       YearLevelElem::create(['elementary_list' => 'Grade 1 Joel']);
       YearLevelElem::create(['elementary_list' => 'Grade 1 Job']);
       YearLevelElem::create(['elementary_list' => 'Grade 2 Micah']);
       YearLevelElem::create(['elementary_list' => 'Grade 2 Esther']);
       YearLevelElem::create(['elementary_list' => 'Grade 3 Daniel']);
       YearLevelElem::create(['elementary_list' => 'Grade 3 Amos']);
       YearLevelElem::create(['elementary_list' => 'Grade 4 Jonah']);
       YearLevelElem::create(['elementary_list' => 'Grade 4 Isaiah']);
       YearLevelElem::create(['elementary_list' => 'Grade 5 Ruth']);
       YearLevelElem::create(['elementary_list' => 'Grade 5 Samuel']);
       YearLevelElem::create(['elementary_list' => 'Grade 6 Malachi']);
       YearLevelElem::create(['elementary_list' => 'Grade 6 Jeremiah']);
       YearLevelElem::create(['elementary_list' => 'Grade 6 Ezra']);
         // junior
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Bartholomew']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Simon']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Andrew']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Matthew']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Jude']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 7 Cephas (Online)']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Levi']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Peter']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Matthias']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Matthias']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Thaddeus']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Thomas']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Silas']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 8 Stephen (Online)']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 Philip']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 Barnabas']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 John']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 Paul']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 Apollos']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 James']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 9 Joseph (Online)']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Mark']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Titus']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Luke']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Timothy']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Philemon']);
       YearLevelJunior::create(['junior_high_list' => 'Grade 10 Aquila (Online)']);
        // senior
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 STEM A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 STEM B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 STEM C']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 STEM D']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 ABM A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 ABM B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 HUMSS A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 HUMSS B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 GAS A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 11 ICT']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 STEM A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 STEM B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 STEM C']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 STEM D']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 ABM A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 ABM B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 HUMSS A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 HUMSS B']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 GAS A']);
       YearLevelSenior::create(['senior_high_list' => 'Grade 12 ICT']);
        
        // college
       YearLevelCollege::create(['college_list' => 'BSIS 1']);
       YearLevelCollege::create(['college_list' => 'BSIS 2']);
       YearLevelCollege::create(['college_list' => 'BSIS 3']);
       YearLevelCollege::create(['college_list' => 'BSIS 4']);
       YearLevelCollege::create(['college_list' => 'ACT 1']);
       YearLevelCollege::create(['college_list' => 'ACT 2']);
       YearLevelCollege::create(['college_list' => 'BSSW 1']);
       YearLevelCollege::create(['college_list' => 'BSSW 2']);
       YearLevelCollege::create(['college_list' => 'BSSW 3']);
       YearLevelCollege::create(['college_list' => 'BSSW 4']);
       YearLevelCollege::create(['college_list' => 'BAB 1']);
       YearLevelCollege::create(['college_list' => 'BAB 2']);
       YearLevelCollege::create(['college_list' => 'BAB 3']);
       YearLevelCollege::create(['college_list' => 'BAB 4']);
       YearLevelCollege::create(['college_list' => 'BSA 1']);
       YearLevelCollege::create(['college_list' => 'BSA 2']);
       YearLevelCollege::create(['college_list' => 'BSA 3']);
       YearLevelCollege::create(['college_list' => 'BSA 4']);
       YearLevelCollege::create(['college_list' => 'BSAIS 1']);
       YearLevelCollege::create(['college_list' => 'BSAIS 2']);
       YearLevelCollege::create(['college_list' => 'BSAIS 3']);
       YearLevelCollege::create(['college_list' => 'BSAIS 4']);
        
        
    }
}
