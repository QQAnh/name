@extends('admin.layoutAdmin.master')
@section('title', 'High Chart')
@section('style')
    {{--{!! Charts::style() !!}--}}
@endsection

@section('content')
    <div class="app">
        <p>
            {!! $chart->html() !!}
        </p>
    </div>
    {{--<div id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>--}}
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
@endsection

@section('js')
    {{--<script src="{{asset('js/admin/chart.js')}}"></script>--}}
    {{--<script src="{{asset('https://code.highcharts.com/highcharts.js')}}"> </script>--}}
@endsection