@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
       <div class="mt-4">
        @if(Session::has('deleteSuccess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         {{ Session::get('deleteSuccess')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <table class="table table-hover mt-3">
            <thead class="bg-dark text-white">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </thead>

            <tbody>
                @foreach ($customer as $item)
                <tr>
                    <td>
                        {{$item->customer_id}}
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <button class="btn bg-success text-white">Edit</button>
                        <a href="{{url('customer/delete'.$item->customer_id)}}"><button class="btn bg-danger text-center btn-sm">Delete</button></a>
                        <a href="{{url('customer/seeMore/'.$item->customer_id)}}"> <button class="btn bg-primary text-center btn-sm">See More</button></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        <div class="m-3">
            <a href="{{route('customer#register')}}"><button class="btn bg-dark text-white float-end">Back</button></a>
        </div>
       </div>
    </div>
</div>
@endsection
