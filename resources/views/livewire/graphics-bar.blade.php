<section class="content">
    <div class="row mb-2">
        <div class="col-sm-4 h-auto tac">
            Amount of tasks by Id User for Id Tasks
            <p>
                <select wire:model="selectedIdUser" name="id_level" id="inputLevel" class="custom-select">
                    @foreach($users as $user => $u) 
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                </select>
            </p>
        </div>
        <div class="col-sm-8 h-auto">
            <div wire:poll="fetchDataGraphicIdUserByIdTasks">
                <div id="chartGraphicIdUserByIdTasks"></div>
                <script>
                    var options = {
                        series: [{
                            name: 'Task',
                            data: @json($graphicY)
                        }],
                        chart: {
                            type: 'bar',
                            animations: {
                                enabled: false,
                            }
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 4,
                                horizontal: true,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            categories: @json($graphicX),
                        }
                    };
                    
                    var chart = new ApexCharts(document.querySelector("#chartGraphicIdUserByIdTasks"), options);
                    
                    chart.render();
                    
                    window.addEventListener('refreshChartGraphicIdUserByIdTasks', (event) => {
                        chart.updateSeries([{
                            data: event.detail[0].seriesData
                        }]);
                    });
                </script>
            </div>
        </div>
    </div>
</section>
