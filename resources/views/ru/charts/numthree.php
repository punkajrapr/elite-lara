<script>
    $(function () {
        $('#chartdiv').highcharts({
            chart: {
                type: 'scatter',
                zoomType: 'xy'
            },
            credits: {
                enabled: false
            },
            title: {
                text: '<?php echo $chart->name;?>'
            },
            xAxis: {
                title: {
                    enabled: true,
                    text: 'Расстояние а.е.'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'Категории'
                },
                categories: [
                    <?php 
                    $max_axis=count($chart->result);
                    $cicle=1;

                    foreach ($chart->result as $key=>$value) {
                                  echo "'$key; обнаружено (".$chart->total["$key"].")'";
                                  if($cicle!=$max_axis) echo ",";
                                  $cicle++;
                    }?>,'Планеты:']
            },

            plotOptions: {
                scatter: {
                    marker: {
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true,
                                lineColor: 'rgb(100,100,100)'
                            }
                        }
                    },
                    states: {
                        hover: {
                            marker: {
                                enabled: false
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br>',
                        pointFormat: '{point.x} а.е.'
                    }
                }
            },
            series: [
                <?php $i=0;
                    foreach ($chart->result as $key=>$value){
                        echo "{";
                        echo "name: '$key',";
                        echo "color: '$colors[$key]',";
                        echo "data: [";
                        foreach ($value as $one) {
                            $x_ax=$one;
                            $y_ax=$i+mt_rand(1, 15)/100;
                            echo "[$x_ax, $y_ax],";
                        }
                        echo "]";
                        $i++;
                        echo"},";}
                ?>
            ]
        });
    });
</script>
<div id='chartdiv'></div>
<p>Любую зону на графике можно увеличить выделив область и удерживая при этом нажатой левую клавишу мыши.</p>