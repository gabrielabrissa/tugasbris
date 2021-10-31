<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++){ 
        DB::table('dosen_72190333')->insert([
            'nidn' => $faker->numberBetween(11111,99999),
            'nama' => $faker->name,
            'gender' => $faker->numberBetween(1,0),
            'kota' => $faker->city,
            'bahasa' => $faker->country
        ]);
    }

}
}
