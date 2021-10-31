<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){ 
            DB::table('mahasiswa_72190333')->insert([ 
                'nim' => $faker->numberBetween(72180221,72180299), 
                'nama' => $faker->name, 
                'gender' => $faker->numberBetween(1,0), 
                'jurusan' => $faker->jobTitle, 
                'bahasa' => $faker->country 
                ]);
            }
    }
}
