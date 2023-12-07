@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Slider List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.slider.add') }}" class="btn btn-info float-right">Add New</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Button Link</th>
                  <th>Button Text</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($sliders) > 0)
                  @foreach ($sliders as $key => $slider)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $slider->title }}</td>
                      <td>{{ $slider->subtitle }}</td>
                      <td>{{ $slider->button_link }}</td>
                      <td>{{ $slider->button_text }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}" alt="Slider image" width="100px" height="100px">
                      </td>
                      <td>
                        @if ($slider->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.slider.delete', $slider->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No slider found</td>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection