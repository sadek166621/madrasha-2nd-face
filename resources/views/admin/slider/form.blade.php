@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Slider</h1>
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
          <form action="@isset($slider){{ route('admin.slider.update', $slider->id) }}@else{{ route('admin.slider.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" @isset($slider) value="{{ $slider->title }}" @endisset>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sub Title</label>
                <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter subtitle" @isset($slider) value="{{ $slider->subtitle }}" @endisset>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Button Link</label>
                <input type="text" name="button_link" class="form-control" id="exampleInputEmail1" placeholder="Enter button link" @isset($slider) value="{{ $slider->button_link }}" @endisset>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Button Text</label>
                <input type="text" name="button_text" class="form-control" id="exampleInputEmail1" placeholder="Enter button text" @isset($slider) value="{{ $slider->button_text }}" @endisset>
              </div>
              <div class="form-group">
                @isset($slider) <img src="{{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}" alt="Slider image" width="100px" height="100px"><br/> @endisset
                <label for="exampleInputFile">@isset($slider) Change Slider Image @else Choose Slider Image @endisset</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="form-control" @isset($slider) @else required @endisset>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($slider) @if($slider->status == 1) checked @endif @else checked @endisset>
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