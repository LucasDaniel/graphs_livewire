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
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    @include('layouts.footer')

</div>
<!-- ./wrapper -->

@endsection
