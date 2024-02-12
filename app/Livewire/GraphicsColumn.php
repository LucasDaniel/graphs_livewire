<?php

namespace App\Livewire;

use App\Providers\GraphicsServiceProvider;
use Livewire\Component;

class GraphicsColumn extends Component
{

    public $datas;
    public $graphicY = [];
    public $graphicX = [];
    public $graphicToMount = [];

    public function mount() {
        $graphValues = GraphicsServiceProvider::GraphicIdLevelTasks();
        $this->graphicX = $graphValues['x'];
        $this->graphicY = $graphValues['y'];
    }

    public function render()
    {
        return view('livewire.graphics-column');
    }

    /**
     * Update the datas
     */
    public function fetchDataGraphicIdLevelTasks() {
        $graphValues = GraphicsServiceProvider::GraphicIdLevelTasks();
        $this->graphicX = $graphValues['x'];
        $this->graphicY = $graphValues['y'];
        $this->dispatch('refreshChartGraphicIdLevelTasks',['seriesData' => $graphValues['y']]);
    }
}
