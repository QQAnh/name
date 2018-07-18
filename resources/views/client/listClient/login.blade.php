@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{url('login')}}" method="POST" role="form">
                    <legend>Login</legend>
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" id="email" placeholder="Phone" name="phone" value="{{old('phone')}}">
                        @if($errors->has('phone'))
                            <p style="color:red">{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        @if($errors->has('password'))
                            <p style="color:red">{{$errors->first('password')}}</p>
                        @endif
                    </div>


                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>



@endsection