@extends('admin.layoutAdmin.master')
@section('title', 'User Admin')

@section('style')
    <link href="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List User
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Emai</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($user as $item)
                                <tr id="{{$item->id}}">
                                    <td></td>
                                    <th class="col-md-2">
                                        <div class="card"
                                             style="background-image: url('{{$item->avatar}}'); background-size: cover; width: 60px; height: 60px;">
                                        </div>
                                        {{--<img src="" style=" with:60px; height: 60px" class="img-thumbnail">--}}
                                    </th>
                                    <td id="fullname-{{$item->id}}">{{$item->fullname}} </td>
                                    <td id="phone-{{$item->id}}"> {{$item->phone}} </td>
                                    <td id="password-{{$item->id}}">{{$item->password}}</td>
                                    <td id="email-{{$item->id}}" >{{$item->email}}</td>
                                    <td id="gender-{{$item->id}}">{{$item->gender}}</td>
                                    <td>
                                        <a href="/user/{{$item->id}}/edit" id="putUser" class="fa fa-edit"> Edit</a> <p> </p>

                                        <a href="#" id="delete-{{$item->id}}" class="fa fa-trash btn-delete"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bạn có chắc muốn xoá?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalContent">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="btnConfirmDelete">Sure</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        var deleteId = '';
        $('.btn-delete').click(function () {
            deleteId = $(this).attr("id").replace('delete-', '');
            var name = $('#fullname-' + deleteId).text();
            name = "Sản phẩm với tên là: '" + name + "'";
            $('#modalContent').text(name);
            $('#exampleModal').modal('show');
        });
        $('#btnConfirmDelete').click(function () {
            $.ajax({
                type: 'DELETE',
                url: '/user/' + deleteId,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function () {
                    $('#messageSuccess').text('Action success!');
                    $('#exampleModal').modal('hide');
                    $('#messageSuccess').removeClass('d-none');
                    $('#'. deleteId).hide();
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('Action fails! Please try again later!');
                    $('#exampleModal').modal('hide');
                }
            });

        });
    </script>



    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>
    <script src="{{asset('js/admin/listUser.js')}}"> </script>
@endsection
