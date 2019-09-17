@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <div id="chart"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var chart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'month'
                        }
                    }]
                }
            }
        })
    </script>
@endsection
