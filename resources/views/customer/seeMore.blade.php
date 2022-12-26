@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="m-5">
            <a href="{{route('customer#list')}}"><button class="btn bg-dark text-white text-right">List Page</button></a>
        </div>
        <div class="card mt-3">
            <div class="card-header text-center text-white bg-dark fs-3">
                <h3>Customer Data</h3>
            </div>

            <div class="card-body">@extends('layouts.app')

                @section('content')
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="card mt-3">
                            <div class="card-header bg-dark text-white fs-3 text-center">
                                Customer Data
                            </div>

                            <div class="card-body">
                                <div class=" ps-5 ms-5">
                                    <label>ID</label> :<label>{{$customer[0]['customer_id']}}</label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>Name</label>: <label>{{$customer[0]['name']}}</label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>Email</label> :<label>{{$customer[0]['email']}}</label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>Address</label> :<label>{{$customer[0]['address']}}</label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>Gender</label>: <label>
                                    @if($customer[0]['gender']==1)
                                    Male

                                    @elseif($customer[0]['gender']==2)
                                    Female

                                    @elseif($customer[0]['gender']==0)
                                    Others

                                    @endif
                                    </label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>Phone</label>: <label>{{$customer[0]['phone']}}</label>

                                </div>
                                <div class=" ps-5 ms-5">
                                    <label>DOB</label> :<label>{{$customer[0]['date_of_birth']}}</label>

                                </div>

                            </div>

                            <div class="card-footer">
                                <a href="{{route('customer#list')}}"><button class="btn bg-dark text-white float-end">Back</button></a>
                            </div>


                        </div>


                    </div>
                </div>
                @endsection

                {{-- @if(Session::has('inputSuccess'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 {{ Session::get('inputSuccess')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif --}}





                    <div class="mb-3">
                        <label for="">
                            Name
                        </label>
                       <label for="">{{$customer[0]['name']}}</label>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Email
                        </label>
                        <label for="">{{$customer[0]['email']}}</label>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Address
                        </label>
                        <textarea name="address"  cols="30" rows="5" class="form-control">{{$customer[0]['address']}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Phone
                        </label>
                        <label for="">{{$customer[0]['phone']}}</label>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Gender :
                        </label>
                       <label for="">
                        @if($customer[0]['gender']==1)
                        Male
                        @elseif ($customer[0]['gender']==2)
                        Female
                        @elseif ($customer[0]['gender']==0)
                        Others
                        @endif

                       </label>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Date of Birth
                        </label>
                        <label for="">{{$customer[0]['date']}}</label>
                    </div>

                    <a href="{{route('customer#list')}}"><button class="btn bg-dark text-white">Back</button></a>






            </div>
        </div>
    </div>
</div>
@endsection
