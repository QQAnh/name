@extends('client.layoutHomepage.homepage')

@section('title', 'Order Detail')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{$action}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}

                    @if($method == "PUT")
                        <input name="_method" type="hidden" value="PUT">
                    @endif

                    <div class="form-group row ">
                        <label class="col-md-2 col-form-label text-right">ProductId</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="productId" id="productId" placeholder="Nhập ProductId" >
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-md-2 col-form-label text-right">Quatity</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Nhập Quatity" >
                        </div>
                    </div>

                    <div class="form-group row fullname-group">
                        <label class="col-md-2 col-form-label text-right">Price</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="price" id="price" placeholder="Nhập Price" >
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

@endsection