<?php

use Illuminate\Database\Seeder;
use App\Task;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = new Task([
    		'user_id' => 1,
    		'task'=>'Do Internet Programming project'
    	]);
    	$items->save();

    	$items = new Task([
    		'user_id' => 1,
    		'task'=>'Cook meal'
    	]);
    	$items->save();

    }
}
