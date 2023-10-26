<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Medicament;

class my_command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get_medicaments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = Medicament::all();
         foreach($data as $med){
            $attributesArray = $med->getAttributes();
            print_r($attributesArray);
        }
        
    }
}
