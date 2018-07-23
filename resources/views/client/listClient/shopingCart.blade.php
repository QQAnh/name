@extends('client.layoutHomepage.master')
@section('title', 'Giỏ hàng ')


@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col"></th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td class="">
                            <div class="card"
                                 style="background-image: url('{{$item['item']['thumbnail']}}'); background-size: cover; width: 60px; height: 60px;">
                            </div>

                        </td>
                        <td>{{$item['item']['title']}}</td>
                        <td>{{$item['qty']}}</td>
                        <td>{{$item['item']['price']}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <span>{{$totalQty}}</span>
            <span>{{$totalPrice}}</span>
        </div>
    </div>


@endsection