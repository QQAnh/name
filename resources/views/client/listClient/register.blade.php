@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')
<style>
    @media(min-width: 768px) {
        .field-label-responsive {
            padding-top: .5rem;
            text-align: right;
        }
    }
</style>
<link href="{{asset('css/layout.css')}}" rel="stylesheet">

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create User</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    đăng ký thành viên
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
                        {{--@if($method == "PUT")--}}
                            {{--<input name="_method" type="hidden" value="PUT">--}}
                        {{--@endif--}}
                        {{ csrf_field() }}
                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">Fullname</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="fullname" value="{{$product->fullname}}" id="fullname" placeholder="Nhập tên đầy đủ" >
                                <div class="fullname-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="fullname-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('fullname')}}</small>
                            </div>
                        </div>

                        <div class=" form-group row phone-group">
                            <label class="col-md-2 col-form-label text-right">Phone</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$product->phone}}" placeholder="Nhập số điện thoại" >
                                <div class="phone-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="phone-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('phone')}}</small>
                            </div>
                        </div>

                        <div  class=" form-group row password-group">
                            <label class="col-md-2 col-form-label text-right">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" id="password" value="{{$product->password}}" placeholder="Nhập mật khẩu" >
                                <div class="password-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="password-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('password')}}</small>
                            </div>
                        </div>

                        <div class="form-group row email-group">
                            <label class="col-md-2 col-form-label text-right">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$product->email}}" name="email" id="email" placeholder="Nhập email" >
                                <div class="email-icon-err">
                                    <i class="fa fa-check"></i>
                                </div>
                                <p class="email-err font-weight-normal"></p>
                                <small class="text-danger">{{$errors->first('email')}}</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Gender</label>
                            <div class="col-md-8">
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="male" checked>Male--}}
                                {{--</label>--}}
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="famale">Famale--}}
                                {{--</label>--}}
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="orther">Orther--}}
                                {{--</label>--}}
                                <input type="text" class="form-control" value="{{$product->gender}}" name="gender" placeholder="Nhập giới tính">
                                <small class="text-danger">{{$errors->first('gender')}}</small>
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

    <script src="{{asset('js/admin/formUser.js')}}"> </script>
@endsection