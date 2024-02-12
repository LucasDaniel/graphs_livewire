<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\TaskType;
use App\Models\UserTask;

class CreateFakeDatasServiceProvider extends ServiceProvider
{
    public static function createTaskUsers() {
        $ids = User::select('id','id_level')->get();
        $u = [];
        foreach($ids as $id => $i) {
            $u[] = [$i->id,$i->id_level];
        }
        $taskType = TaskType::all();
        $tt = [];
        foreach($taskType as $taskT => $t) {
            $tt[] = $t->id;
        }
        $maximo = rand(10,30);
        for($i = 0; $i < $maximo; $i++) {
            $userTask = new UserTask();
            $userTask->id_user = $u[rand(0,count($u)-1)][0];
            $userTask->id_level = $u[rand(0,count($u)-1)][1];
            $userTask->id_task = $tt[rand(0,count($tt)-1)];
            $userTask->time_in_hours = rand(1,8);
            $userTask->save();
        }
    }
}
