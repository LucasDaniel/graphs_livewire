@extends('layouts.scripts')

@section('title','Bycoders - Home')

@section('content')
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
  
      @include('layouts.menu')
          
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">User</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">

          @if(count($errors))
            @include('layouts.error')
          @endif
          @if(isset($msg))
            @include('layouts.message',['msg'=>$msg])
          @endif
          
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Create</h3>
            </div>
            <form action="{{ route('app.user.store') }}" method="post">
              @csrf

              @if(isset($user))
              <input name="id" type="hidden" value="{{ $user->id }}">
              @endif

              <div class="card-body">
                <div class="form-group row">
                  <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <select name="id_level" id="inputLevel" class="custom-select">
                      @foreach($user_level as $u_level => $ul) 
                      @if(isset($user))
                        <option value="{{ $ul->id }}" @php if ($user->id_level == $ul->id) echo 'selected'; @endphp>{{ $ul->level }}</option>
                      @else    
                        <option value="{{ $ul->id }}">{{ $ul->level }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input name="name" value="{{ $user->name ?? '' }}" type="text" class="form-control" id="inputName" placeholder="Username">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input name="email" value="{{ $user->email ?? '' }}" type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputpassword_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input name="password_confirmation" type="password" class="form-control" id="inputpassword_confirmation" placeholder="Confirm Password">
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          @include('user-list',['userList' => $users])
          
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      @include('layouts.footer')

    </div>
    <!-- ./wrapper -->

@endsection
