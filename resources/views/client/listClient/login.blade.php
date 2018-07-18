@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{url('login')}}" method="POST" role="form">
                    <legend>Login</legend>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" id="phone" placeholder="phone" name="phone" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>


@endsection