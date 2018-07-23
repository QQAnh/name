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
                                <th>UserId</th>
                                <th>Name Receiver</th>
                                <th>Phone Receiver</th>
                                <th>Address Receiver</th>
                                <th>Note</th>
                                <th>Total Money (VND)</th>
                                <th> Hành Động </th>

                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($order_detail as $item )
                                <tr id="{{$item->id}}">

                                    <td>{{$item->orderId}} </td>

                                    <td>
                                        <a href="#" id="putUser" class="fa fa-edit"> Xem chi tiết</a> <p> </p>
                                    </td>

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
