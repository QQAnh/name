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
                                <th>ID</th>
                                <th>Product ID</th>
                                <th>Quantity</th>

                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                              <tr>
                                  <th>{{$order_detail->orderId}}</th>
                                  <th>{{$order_detail->productId}}</th>
                                  <th>{{$order_detail->quantity}}</th>
                              </tr>
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
