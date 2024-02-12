<?php

namespace App\Livewire;

use App\Models\User;
use App\Providers\GraphicsServiceProvider;
use Livewire\Component;

class GraphicsBar extends Component
{
    public $datas;
    public $graphicY = [];
    public $graphicX = [];
    public $graphicToMount = [];
    public $users;
    public $selectedIdUser = 1;

    public function mount() {
        $this->users = User::all();
        $graphValues = GraphicsServiceProvider::GraphicIdUserByIdTasks($this->selectedIdUser);
        $this->graphicX = $graphValues['x'];
        $this->graphicY = $graphValues['y'];
    }

    /**
     * Update the datas
     */
    public function fetchDataGraphicIdUserByIdTasks() {
        $graphValues = GraphicsServiceProvider::GraphicIdUserByIdTasks($this->selectedIdUser);
        $this->graphicX = $graphValues['x'];
        $this->graphicY = $graphValues['y'];
        $this->dispatch('refreshChartGraphicIdUserByIdTasks',['seriesData' => $graphValues['y']]);
    }

    public function render()
    {
        return view('livewire.graphics-bar');
    }
}
