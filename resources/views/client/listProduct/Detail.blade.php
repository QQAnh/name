@extends('client.layoutHomepage.homepage')
@section('title', 'Order Detail')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{$action}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group row ">
                        <label class="col-md-2 col-form-label text-right">ProductId</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="ProductId" id="ProductId" placeholder="Nhập ProductId" >
                            <div class="fullname-icon-err">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-md-2 col-form-label text-right">Quatity</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Quatity" value="{{$order->UserId}}" id="Quatity" placeholder="Nhập Quatity" >
                            <div class="fullname-icon-err">
                                <i class="fa fa-check"></i>
                            </div>


                        </div>
                    </div>

                    <div class="form-group row fullname-group">
                        <label class="col-md-2 col-form-label text-right">Price</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Price" id="Price" placeholder="Nhập Price" >
                            <div class="fullname-icon-err">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection