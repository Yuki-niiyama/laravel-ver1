<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //どんなテストデータを入れるのか
        DB::table('tasks')->insert([
            'body' => 111,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);
    }
}
