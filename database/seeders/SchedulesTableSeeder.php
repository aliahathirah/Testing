<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'title'=>'Laravel Training 3 Days',
            'description' =>'The 3 Days training focus on how to use Laravel',
            'attachement' => '',
            'user_id'=> factory('App\User')->create()->id,
        ]);
    }
}