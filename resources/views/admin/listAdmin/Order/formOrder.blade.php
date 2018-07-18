@extends('admin.layoutAdmin.master')
@section('title', 'Create Product')
@section('style')
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    Thêm sản phẩm mới
                </div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{$action}}" id="add-user" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @if($method == "PUT")
                            <input name="_method" type="hidden" value="PUT">
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">UserId</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="UserId" {{--value="{{$order->UserId}}"--}} id="UserId" placeholder="Nhập userId" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('UserId')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">productId</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="productId" {{--value="{{$order->productId}}"--}} id="productId" placeholder="Nhập productId" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('productId')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">nameBuyes</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nameBuyes" {{--value="{{$order->nameBuyes}}"--}} id="nameBuyes" placeholder="Nhập tên người mua" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('nameBuyes')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">nameReceiver</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nameReceiver" {{--value="{{$order->nameReceiver}}"--}} id="nameReceiver" placeholder="Nhập tên người nhận" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('nameReceiver')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">addressReceiver</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="addressReceiver" {{--value="{{$order->addressReceiver}}"--}} id="addressReceiver" placeholder="Nhập địa chỉ người nhận" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('addressReceiver')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">phoneBuyes</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phoneBuyes" {{--value="{{$order->phoneBuyes}}"--}} id="phoneBuyes" placeholder="Nhập số điện thoại người mua" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('phoneBuyes')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">phoneReceiver</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phoneReceiver" {{--value="{{$order->phoneReceiver}}"--}} id="phoneReceiver" placeholder="Nhập số điện thoại người nhận" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('phoneReceiver')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">totalMoney</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="totalMoney" {{--value="{{$order->totalMoney}}"--}} id="totalMoney" placeholder="Nhập tổng số tiền đơn hàng" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('totalMoney')}}</small>
                            </div>
                        </div>

                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">quantity</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="quantity" {{--value="{{$order->quantity}}"--}} id="quantity" placeholder="Nhập quantity" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('quantity')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label> </label>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    {{--<script src="{{asset('js/admin/formUser.js')}}"> </script>--}}
@endsection