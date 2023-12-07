<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ getSetting()->site_title }} | Admin Dashboard</title>
  <link rel="icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" sizes="32x32" />

  @include('admin.layouts.partials._style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_logo }}" alt="logo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('admin.layouts.partials._header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layouts.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin.layouts.partials._footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layouts.partials._script')
{!! Toastr::message() !!}
</body>
</html>
