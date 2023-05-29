<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals=['Cerchi in lega', 'LED','Aria condizionata'];

        foreach($optionals as $optional){
            $newOption = new Optional();
            $newOption->name = $optional;
            $newOption->slug=Str::slug($optional,'-');
            $newOption->save();
        }
    }
}
