@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="mt-5 text-end">
            <a href="{{route('customer#list')}}"><button class="btn bg-dark text-white text-right">List Page</button></a>
        </div>
        <div class="card mt-3">
            <div class="card-header text-center text-white bg-dark fs-3">
                <h3>Register Form</h3>
            </div>

            <div class="card-body">
                @if(Session::has('inputSuccess'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 {{ Session::get('inputSuccess')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                <form action="{{route('customer#create')}}" method="POST">

                    @csrf
                    <div class="mb-3">
                        <label for="">
                            Name

                        </label>
                        <input type="text" name="name"  class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Email
                        </label>
                        <input type="email" name="email"  class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Address
                        </label>
                        <textarea name="address"  cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Phone
                        </label>
                        <input type="number" name="phone"  class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Gender
                        </label>
                        <select name="gender" class="form-control">
                            <option value="empty">Choose option........</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">
                            Date of Birth
                        </label>
                        <input type="date" name="dateOfBirth"  class="form-control">
                    </div>

                    <div class="card-footer">
                        <div class="mb-3">
                        <input type="submit" value="Register" class="btn bg-danger text-white float-end">
                        </div>
                    </div>



                </form>


            </div>
        </div>
    </div>
</div>
@endsection
