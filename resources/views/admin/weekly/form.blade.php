@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($Weekly) Update @else Add New @endisset Weekly</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="@isset($Weekly){{ route('admin.weekly.update', $Weekly->id) }}@else{{ route('admin.weekly.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Class</label>
                <input type="text" name="class" class="form-control" id="exampleInputEmail1" placeholder="Enter Class" @isset($Weekly) value="{{ $Weekly->class }}" @endisset required>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Section</label>
                        <input type="text" name="section" class="form-control" id="exampleInputEmail1" placeholder="Enter Section" @isset($Weekly) value="{{ $Weekly->section }}" @endisset >
                      </div>
                  </div>
                  <div class="col-sm-8" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Link</label>
                        <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter Link" @isset($Weekly) value="{{ $Weekly->link }}" @endisset >
                      </div>
                  </div>

                </div>
              </div>
                <div class="form-check ">
                  <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($Weekly) @if($Weekly->status == 1) checked @endif @else checked @endisset>
                  <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('js')
<script>
     $(document).ready(function () {
        $('#description').summernote();
     });
</script>
@endpush
