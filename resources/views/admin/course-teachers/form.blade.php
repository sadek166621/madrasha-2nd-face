@extends('admin.layouts.master')
@section('content')
<style>
    /* Style for selected items */
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      /* Change to your desired background color */
      color: #000; /* Change to your desired text color */
      border: 1px solid #0069D9; /* Change to your desired border color */
    }
  </style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($onlineclass) Update @else Add New @endisset Course-Teachers </h1>
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
          <form action="@isset($courseteachers){{ route('admin.course-teachers.update', $courseteachers->id) }}@else{{ route('admin.course-teachers.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                        <label for="department_id">Course</label>
                        <select class="form-control" name="course_id" id="" required>
                          <option value="">--Select Course--</option>
                          {{-- <option value="1" @isset($courseteachers)@if ($courseteachers->course_id==1)selected @endif @endisset>Quran Reading Course</option>
                          <option value="2" @isset($courseteachers)@if ($courseteachers->course_id==2)selected @endif @endisset>Quran Memorization Course</option> --}}
                          @foreach ($courses as $course)
                            @isset($courseteachers)
                              <option value="{{ $course->id }}" @if($courseteachers->course_id == $course->id) selected @endif>{{ $course->name }}</option>
                            @else
                              <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endisset
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-sm-8" style="float: left">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">Teachers</label>
                            <select class="form-control js-example-basic-multiple" name="teacher_id[]" multiple="multiple" >
                              @foreach ($teachers as $teacher)
                                @isset($courseteachers)
                                  <option value="{{ $teacher->id }}" @if($teacher->id == $courseteachers->teacher_id) selected @endif>{{ $teacher->name }}</option>
                                @else
                                  <option  value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endisset
                              @endforeach
                            </select>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
                {{-- <div class="form-check ">
                  <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($onlineclass) @if($onlineclass->status == 1) checked @endif @else checked @endisset>
                  <label class="form-check-label" for="exampleCheck1">Active</label>
                </div> --}}
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
<script>
   $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
@endpush
