@extends('admin.layoutAdmin.master')
@section('title', 'List SmartPhone')
@section('content')
   @foreach($category as $key => $item)
       <ul>
           <li>{{$item->id}}</li>
       </ul>


    @endforeach

@endsection


