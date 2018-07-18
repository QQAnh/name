@extends('client.layoutHomepage.master')
@section('title', 'Laptop')

@section('content')
    <div class="row">
        <div class="ml-5 col-md-5">
            <h1>Laptop</h1>
            <p>Di Động Việt là nhà bán lẻ điện thoại có gần 10 năm trên thị trường với nhiều thương hiệu hàng đầu như
                Apple,
                SamSung, LG,, Xiaomi, HTC,...mang đến cho khách hàng nhiều sự lựa chọn.</p>
            <p>Đặc biệt, các dòng điện thoại cũ cao cấp tại Di Động Việt đang được đông đảo khách hàng đón nhận nhiều
                nhất
                bởi mức giá hợp lý, chất lượng được kiểm định kỹ lưỡng trước khi đến tay người tiêu dùng. Tất cả các sản
                phẩm đều có chính sách bảo hành dài hạn, tư vấn nhiệt tình, giá bán rẻ, hậu mãi vượt trội.</p>

        </div>
        <div class="col-md-6">
            <img
                    src="https://img.purch.com/1524196804874-jpg/w/755/aHR0cDovL21lZGlhLmJlc3RvZm1pY3JvLmNvbS8yL1EvNzY2MDM0L29yaWdpbmFsLzE1MjQxOTY4MDQ4NzQuanBn " width="600"
                    alt="Laptop" title="Laptop" class="image"/>
        </div>


    </div>
    <div class="container">
        <div class="row">
            @foreach($product as $key =>$item)
                <div class="col-md-3 border border-light bg-white" >
                    <div class="img-product text-center p-4">
                        <a href="/test/{{$item->id}}"><img src="{{$item->thumbnail}}" style="height: auto; max-width: 100%;"></a>
                    </div>
                    <div class="text-product pb-3">
                        <a href="/test/{{$item->id}}" class="text-dark"> <p class="text-center mb-0" style="font-size: 14px">{{$item->title}}</p></a>
                        <a href="#" class="text-danger"> <p class="text-center font-weight-bold mb-0">{{$item->price}} đ </p></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection