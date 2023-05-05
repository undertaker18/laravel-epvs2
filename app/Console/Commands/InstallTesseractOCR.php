<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallTesseractOCR extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:ocr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Tesseract OCR';

    /**
     * Execute the console command.
     */
    public function handle()
    {
     
        exec('sudo apt-get install tesseract-ocr');
        $this->info('Tesseract OCR has been installed.');
          
    }
}
