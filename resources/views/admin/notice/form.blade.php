@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($notice) Update @else Add New @endisset Notice</h1>
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
          <form action="@isset($notice){{ route('admin.notice.update', $notice->id) }}@else{{ route('admin.notice.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter notice title" @isset($notice) value="{{ $notice->title }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">@isset($notice) {{ $notice->description }} @endisset</textarea>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-4" style="float: left">
                    <div class="form-check">
                      <label for="description">Notice Type</label>
                      <select name="type" id="type" class="form-control">
                        @isset($notice)
                          <option value="1" @if($notice->type == 1) selected @endif>Genearl Notice</option>
                          <option value="2" @if($notice->type == 2) selected @endif>Other Notice</option>
                        @else
                          <option value="1">Genearl Notice</option>
                          <option value="2">Other Notice</option>
                        @endisset
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                      <label for="exampleInputFile">
                        @isset($notice)
                          @if($notice->file)
                            Change Notice File (previous file: <a href="{{ asset('assets/files/uploads/notices') }}/{{ $notice->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                          @endif
                        @else
                          Import Notice File
                        @endisset
                      </label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="notice_file" class="form-control @error('notice_file') is-invalid @enderror">
                        </div>
                        @error('notice_file')
                            <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4" style="float: left">
                    <div class="form-check mt-3" style="float: right">
                      <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($notice) @if($notice->status == 1) checked @endif @else checked @endisset>
                      <label class="form-check-label" for="exampleCheck1">Active</label>
                    </div>
                  </div>
                </div>
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
