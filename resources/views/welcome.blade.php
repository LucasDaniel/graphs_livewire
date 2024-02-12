@extends('layouts.scripts')

@section('title','Bycoders - Cripto Loja')

@section('content')
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Bycoders</b> Cripto Loja</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>
          @if(isset($err))
          <p class="login-box-msg">{{ $err }}</p>
          @endif
    
          <form action="{{ route('app.login') }}" method="post">
            @csrf

            <div class="input-group mb-3">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            {{ $errors->has('email') ? $errors->first('email') : '' }}
            <div class="input-group mb-3">
              <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <br>
            </div>
            {{ $errors->has('password') ? $errors->first('password') : '' }}
            <div class="row">
              <div class="col-8">

              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
@endsection
