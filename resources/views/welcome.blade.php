@extends('layout.app')

@section('title','Form page')

@section('content')

    @include('partials/error')
    <div class="row container">
        <div class="col-md-6">
            <div class="display-3">Sign Up</div>
            <form action="{{ route('signup') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="col-sm-4 col-form-label">Your Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Enter your Email" value="{{ Request::old('email') }}">
                    </div>
                    
                    <div class="form-control {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        <label for="first_name" class="col-sm-4 col-form-label">
                            Your First Name
                        </label>
                        <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter your First Name" value="{{ Request::old('first_name') }}">
                    </div>

                    <div class="form-control {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                    </div>
                    <br>
                    <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="display-3">Sign In</div>
            <form class="form-group" action="{{ route('signin') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-control {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="col-sm-4 col-form-label">Your Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Enter your Email" value="{{ Request::old('email') }}">
                    </div>

                    <div class="form-control {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                    </div>
                    <br>
                    <button class="btn btn-info" type="submit">Submit</button>

            </form>
        </div>
    </div>
@endsection