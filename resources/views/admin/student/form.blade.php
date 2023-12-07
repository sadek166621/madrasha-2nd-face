@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New student</h1>
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
          <form action="@isset($student){{ route('admin.student.update', $student->id) }}@else{{ route('admin.student.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" @isset($student) value="{{ $student->first_name }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" @isset($student) value="{{ $student->last_name }}" @endisset required>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Father's Name</label>
            <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" placeholder="Enter father's Name" @isset($student) value="{{ $student->roll_num }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Mother's Name" @isset($student) value="{{ $student->reg_num }}" @endisset required>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Roll Number</label>
            <input type="number" name="roll_num" class="form-control" id="exampleInputEmail1" placeholder="Enter Roll Number" @isset($student) value="{{ $student->roll_num }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Reg Number</label>
                    <input type="number" name="reg_num" class="form-control" id="exampleInputEmail1" placeholder="Enter Reg Number" @isset($student) value="{{ $student->reg_num }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <select name="class" class="form-control" required>
                        <option value="">--Select Class--</option>

                            <option value="1" @isset($student) @if($student->class == 1) selected @endif @endisset>One</option>
                            <option value="2" @isset($student) @if($student->class == 2) selected @endif @endisset>two</option>
                            <option value="3"@isset($student) @if($student->class == 3) selected @endif @endisset>three</option>
                            <option value="4"@isset($student) @if($student->class == 4) selected @endif @endisset>four</option>
                            <option value="5"@isset($student) @if($student->class == 5) selected @endif @endisset>five</option>
                            <option value="6"@isset($student) @if($student->class == 6) selected @endif @endisset>six</option>
                            <option value="7"@isset($student) @if($student->class == 7) selected @endif @endisset>seven</option>
                            <option value="8"@isset($student) @if($student->class == 8) selected @endif @endisset>eight</option>
                            <option value="9"@isset($student) @if($student->class == 9) selected @endif @endisset>nine</option>
                            <option value="10"@isset($student) @if($student->class == 10) selected @endif @endisset>ten</option>
                            <option value="11"@isset($student) @if($student->class == 11) selected @endif @endisset>eleven</option>
                            <option value="12"@isset($student) @if($student->class == 12) selected @endif @endisset>twelve</option>


                   </select>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admission Year</label>
                    <input type="number" name="admission_year" class="form-control" id="exampleInputEmail1" placeholder="Enter Admission Year" @isset($student) value="{{ $student->admission_year }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
            <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" @isset($student) value="{{ $student->roll_num }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        @isset($student) <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" alt="student image" width="100px" height="100px"><br/> @endisset
                        <label for="exampleInputFile">@isset($student) Change student Image @else Choose student Image @endisset</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" @isset($student) @else required @endisset>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                {{-- <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" @isset($student) value="{{ $student->phone }}" @endisset required> --}}
                <textarea class="form-control" placeholder="Enter address" name="address" required>
                    @isset($student) {{ $student->phone }} @endisset
                </textarea>
              </div>


              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($student) @if($student->status == 1) checked @endif @else checked @endisset>
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
