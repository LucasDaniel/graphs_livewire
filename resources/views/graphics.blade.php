@extends('layouts.scripts')
<livewire:styles />

@section('title','Bycoders - Home')

@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('layouts.menu')

    <div class="content-wrapper h-auto">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Graphics</h1>
            </div>
          </div>
        </div>
      </div> 
      <section class="content">
        <div class="row mb-2">
          <div class="col-sm-12 h-auto">
            <livewire:graphics-column />
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-12 h-auto">
            <livewire:graphics-bar />
          </div>
        </div>
      </section>      
    </div>
 
    <livewire:scripts />  
    @include('layouts.footer')

</div>

@endsection
