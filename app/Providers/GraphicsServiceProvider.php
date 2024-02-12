<?php

namespace App\Providers;

use App\Models\TaskType;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserTask;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Illuminate\Support\ServiceProvider;

class GraphicsServiceProvider extends ServiceProvider
{
    /**
     * Get The sum of time in hours of User level
     */
    public static function GraphicIdLevelTasks() {
        $userTypes = UserLevel::all();
        $_y = [];
        $_x = [];
        foreach($userTypes as $usuType => $ut) {
            $_y[] = (int)UserTask::where('id_level',$ut->id)->sum('time_in_hours');
            $_x[] = $ut->level;
        }
        return  ['x'=>$_x,'y'=>$_y];
    }

    /**
     * Get The sum of time in hours of User level
     */
    public static function GraphicIdUserTasks() {
        $userTypes = User::all();
        $_y = [];
        $_x = [];
        foreach($userTypes as $usuType => $ut) {
            $_y[] = (int)UserTask::where('id_user',$ut->id)->sum('time_in_hours');
            $_x[] = $ut->name;
        }
        return  ['x'=>$_x,'y'=>$_y];
    }

    /**
     * Get The sum of time in hours of that Id User by Id Task
     */
    public static function GraphicIdUserByIdTasks($idUser) {
        $taskTypes = TaskType::all();
        $_y = [];
        $_x = [];
        foreach($taskTypes as $taskType => $tt) {
            $_y[] = (int)UserTask::where('id_user',$idUser)->where('id_task', $tt->id)->sum('time_in_hours');
            $_x[] = $tt->type;
        }
        return  ['x'=>$_x,'y'=>$_y];
    }
}
