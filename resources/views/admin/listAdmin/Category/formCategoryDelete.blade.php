@extends('admin.layoutAdmin.master')
@section('title', 'Delete Category')
@section('style')
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Delete Category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    Xoá category
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>

                        </tr>
                        </thead>
                        <tbody id="demo-get">
                        </tbody>
                        <tbody >
                        <tr id="{{$item->id}}">
                            <td>{{$item->id}}</td>
                            <th class="col-md-2">
                                {{--<div class="card"--}}
                                {{--style="background-image: url('{{$item->image_url}}'); background-size: cover; width: 60px; height: 60px;">--}}
                                {{--</div>--}}
                                <img src="{{$item->image_url}}" style=" with:60px; height: 60px" class="img-thumbnail">
                            </th>
                            <td id="title-{{$item->title}}">{{$item->title}}</td>
                            {{--<td>{{$item->description}} </td>--}}
                            {{--<td>{{$item->price}}</td>--}}

                        </tr>
                        </tbody>
                    </table>


                    <form action="{{$action}}" id="add-user" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @if($method == "PUT")
                            <input name="_method" type="hidden" value="PUT">
                        @endif
                        {{ csrf_field() }}

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

    <script src="{{asset('js/admin/formCategory.js')}}"> </script>
@endsection