<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class task_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tasks')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'due_date' => Carbon::now()->subMinutes(rand(1, 55)),
        ]);
    }
}
