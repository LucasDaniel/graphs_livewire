<section class="content">
    <div class="row mb-2">
        <div class="col-sm-4 h-auto tac">
            Amount of tasks by User Level
            <p>
                Description of Graphic
            </p>
        </div>
        <div class="col-sm-8 h-auto">
            <div wire:poll="fetchDataGraphicIdLevelTasks">
                <div id="chartGraphicIdLevelTasks"></div>
                <script>
                    var options = {
                        series: [{
                            name: 'Tasks',
                            data: @json($graphicY)
                        }],
                        chart: {
                            type: 'bar',
                            animations: {
                                enabled: false,
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            formatter: function (val) {
                                return val;
                            },
                            offsetY: -20,
                            style: {
                                fontSize: '12px',
                                colors: ["#FFFFFF"]
                            }
                        },
                        xaxis: {
                            categories: @json($graphicX)
                        },
                    }
                    
                    var chart = new ApexCharts(document.querySelector("#chartGraphicIdLevelTasks"), options);
                    
                    chart.render();

                    window.addEventListener('refreshChartGraphicIdLevelTasks', (event) => {
                        console.log('refreshChart Column');
                        console.log(event);
                        console.log(chart);
                        console.log("----------------------------");
                        chart.updateSeries([{
                            data: event.detail[0].seriesData
                        }]);
                    });
                </script>
            </div>
        </div>
    </div>
</section>
