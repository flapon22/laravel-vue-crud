<?php

use Illuminate\Database\Seeder;
Use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::Class, 35)->create();
    }
}
