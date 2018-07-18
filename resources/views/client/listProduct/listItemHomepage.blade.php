@extends('client.layoutHomepage.homepage')
@section('title', 'List Product')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($product as $key =>$item)
                <div class="col-md-3 border border-light bg-white product-item" >
                    <div class="img-product text-center p-4">
                        <a href="#"><img src="{{$item->thumbnail}}" style="height: auto; max-width: 100%;"></a>
                    </div>
                    <div class="text-product pb-3">
                        <a href="#" class="text-dark"> <p class="text-center mb-0" style="font-size: 14px">{{$item->title}}</p></a>
                        <a href="#" class="text-danger"> <p class="text-center font-weight-bold  mb-0">{{$item->price}} đ </p></a>
                    </div>
                    <div class="overlay">
                        <div class="text"><a href="#" class="text-white">Xem chi tiết</a></div>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="/shoppingCart/create">Add OrderDetail</a>
    </div>
@endsection