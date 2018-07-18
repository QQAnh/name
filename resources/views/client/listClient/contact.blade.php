@extends('client.layoutHomepage.master')
@section('title', 'Liên hệ')

@section('content')

    <div class="contact-content clearfix" ng-controller="contactController" ng-init="initController('Shop','Maps')">
        <h1 class="title">
            <span>
                Thông tin liên hệ
            </span>
        </h1>
        <div class="contact-block clearfix">
            <div class="row">
                <div class="col-md-3">
                    <a href="/">
                        <img class="img-responsive" src="http://runecom03.runtime.vn/Uploads/shop90/images/banner(1).png" />
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="contact-info">
                        <div class="docs"><b class="name"></b></div>
                        <div class="docs">
                            <i class="fa fa-map-marker"></i>
                            <b>Địa chỉ: 123@@</b>
                        </div>
                        <div class="docs">
                            <i class="fa fa-phone"></i>
                            <b>Điện thoại:0123123123</b>
                        </div>
                        <div class="docs">
                            <i class="fa fa-mobile"></i>
                            <b>Hotline : 312312321</b>
                        </div>

                        <div class="docs">
                            <i class="fa fa-envelope"></i>
                            <a href=""> fb.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="" />
            <h3 class="title">Gửi thông tin liên hệ</h3>
            <div class="description">
                Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi
                sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-feedback">
                        <form>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                <input type="text" placeholder="Họ tên" ng-model="Name" class="form-control" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <input type="text" placeholder="Địa chỉ" ng-model="Address" class="form-control" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" placeholder="Email" ng-model="Email" class="form-control" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" placeholder="Điện thoại" ng-model="Phone" class="form-control" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" placeholder="Tiêu đề" ng-model="Title" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Nội dung" class="form-control" rows="3" ng-model="Content" required></textarea>
                            </div>
                            <button class="btn btn-default" type="submit" style="color:black">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7353.501624170008!2d105.86148980040318!3d20.99284402154428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0fdd94160f%3A0x54db3199cd49deb3!2zNTkgVGFtIFRyaW5oLCBWxKluaCBUdXksIEhvw6BuZyBNYWksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1531729369470" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>



@endsection