@extends('layouts.main')

@section('content')

  @include('parts.nav')

  <div class="container-fluid" style="padding: 80px;">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        @if($errors->has('login'))
          <b style="color: red;">{{ $errors->first('login') }}</b>
          <hr />
        @endif
        <form method="post" action="{{ url('signin') }}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            @if($errors->has('email'))
              <small style="color: red;">{{ $errors->first('email') }}</small>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            @if($errors->has('password'))
              <small style="color: red;">{{ $errors->first('password') }}</small>
            @endif
          </div>
          <button type="submit" class="btn btn-info">Sign in</button>
        </form>
      </div>
    </div>
  </div>

@endsection
