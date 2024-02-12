<?php

namespace App\Http\Controllers;

use App\Models\UserLevel;
use App\Providers\GraphicsServiceProvider;

class GraphicController extends Controller
{
    public function index() {
        return view('graphics', ['chart' => GraphicsServiceProvider::GraphicIdLevelTasks()]);
    }

    public function isUserTask() {
        return $userTypes = UserLevel::all();//GraphicsServiceProvider::GraphicIdUserTasks();
    }
}
