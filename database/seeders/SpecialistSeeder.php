<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\MasterData\Specialist;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $specialist =[
            [
                'name' => 'Dermatology',
                'price' => '250000'
            ],
            [
                'name' => 'Dentist',
                'price' => '450000'
            ],
            [
                'name' => 'Endodontics',
                'price' => '150000'
            ],
            [
                'name' => 'General Dendistry',
                'price' => '120000'
            ],
            [
                'name' => 'Oral dan Maxillofacial Surgery',
                'price' => '80000'
            ],
            [
                'name' => 'Orthodontics',
                'price' => '900000'
            ],
            [
                'name' => 'Periodontics',
                'price' => '300000'
            ],
            [
                'name' => 'Prosthodontics',
                'price' => '250000'
            ],
            [
                'name' => 'Radiology',
                'price' => '80000'
            ],
            [
                'name' => 'Surgery',
                'price' => '80000'
            ],
            [
                'name' => 'Urology',
                'price' => '80000'
            ],
        ];

        Specialist::insert($specialist);
    }
}
