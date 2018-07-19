@extends('admin.layoutAdmin.master')
@section('title', 'Order')
@section('js')
    {{--<script src="{{asset('js/admin/chart.js')}}"></script>--}}

@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables Order</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List Order
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>TotalMoney</th>
                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($order as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->UserId}}</td>
                                    <td>{{$item->nameReceiver}} </td>
                                    <td>{{$item->addressReceiver}}</td>
                                    <td>{{$item->phoneReceiver}}</td>
                                    <td>{{$item->addressReceiver}}</td>
                                    <td>{{$item->note}}</td>

                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->totalMoney}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection
