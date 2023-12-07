@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($onlineclass) Update @else Add New @endisset Curriculum </h1>
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
          <form action="@isset($onlineclass){{ route('admin.curriculum.update', $onlineclass->id) }}@else{{ route('admin.curriculum.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" @isset($onlineclass) value="{{ $onlineclass->title }}" @endisset required>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  {{-- <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                       <label for="exampleInputEmail1">Position</label>
                         <input type="text" name="section" class="form-control" id="exampleInputEmail1" placeholder="Enter Section" @isset($onlineclass) value="{{ $onlineclass->section }}" @endisset >

                         <select class="form-control" name="position" id="">
                            <option value="1">
                               Male Quran Reading Course(Kids)
                            </option>
                            <option value="2">
                                Male Quranic Arabic Course(Kids)
                            </option>
                            <option value="3">
                                Male Quran Memorization Course (Kids)
                            </option>
                            <option value="4">
                                Male Quran Reading Course(Adult)
                            </option>
                            <option value="5">
                                Male Quranic Arabic Course(Adult)
                            </option>
                            <option value="6">
                                Male Quran Memorization Course (Adult)
                            </option>
                            <option value="7">
                                Female Quran Reading Course(Kids)
                            </option>
                            <option value="8">
                                Female Quranic Arabic Course(Kids)
                            </option>
                            <option value="9">
                                Female Quran Memorization Course (Kids)
                            </option>
                           </select>
                      </div>
                  </div> --}}
                  <div class="col-sm-12" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputFile">
                          @isset($onlineclass)
                            @if($onlineclass->file)
                              Change Curriculum File (previous file: <a href="{{ asset('assets/files/uploads/curriculum') }}/{{ $onlineclass->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                            @endif
                          @else
                            Import Curriculum File
                          @endisset
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="link" class="form-control @error('notice_file') is-invalid @enderror">
                          </div>
                          @error('notice_file')
                              <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                  </div>

                </div>
              </div>
                <div class="form-check ">
                  <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($onlineclass) @if($onlineclass->status == 1) checked @endif @else checked @endisset>
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
