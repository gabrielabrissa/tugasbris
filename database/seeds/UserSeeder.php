<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([ 
            'name' => 'Gabriela Brissa', 
            'email' => 'gabriela@gmail.com', 
            'password' => bcrypt('gabriela'), 
            'remember_token' => str_random(50),
            'created_at' => Carbon::now() ->format('Y-m-d H-i-s'),
            'updated_at' => Carbon::now() ->format('Y-m-d H-i-s')
            ]);
    }
}
