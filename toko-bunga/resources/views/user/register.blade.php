@extends('app')
@section('content')
  <div class="row">
    <div class="col-md-6">
        <form action="">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger"></span></label>
                <input class="form-control" name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger"></span></label>
                <input class="form-control" name="email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger"></span></label>
                <input class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label>Password Confirmasi <span class="text-danger"></span></label>
                <input class="form-control" name="passwordconf">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
    </div>  
@endsection