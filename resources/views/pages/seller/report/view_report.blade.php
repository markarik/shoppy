@extends('layouts.master')

@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-md-12 graphs">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="stocks-chart" style="height: 400px">

                        </div>
                    </div>
                </div>
<?= $lava->render('LineChart', 'MyStocks', 'stocks-chart')?>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 graphs">
                <div id="charts" style="height: 400px">

                </div>

            </div>
<?= $lava->render('PieChart', 'IMDB', 'charts')?>

        </div>

        <div class="row">
            <div class="col-md-12 graphs">
                <div class="cards">
                        <canvas id="myChart" ></canvas>
                </div>

            </div>

        </div>
    </div>

@endsection


@section('js')
    <script src="{{asset('js/chart/Chart.js')}}"></script>



    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:  [@foreach(array_keys($order_chart_data) as $key) '{{$key}}' ,@endforeach],
                labes : ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Nov","Dec"],
                datasets: [{
                    label: '# of Votes',
                    data: [@foreach(array_values($order_chart_data) as $key) {{$key}} ,@endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',

                    ],

                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

@endsection