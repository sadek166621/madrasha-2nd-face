@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Student List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.student.add') }}" class="btn btn-info float-right">Add New</a>
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
            {{-- <form action="{{ route('admin.student.list') }}" method="get" class="form-inline mb-2">
              <div class="form-group mx-sm-3 mb-2">
                <select name="department" id="department" class="form-control">
                  <option value="">--Select Department--</option>
                  {{-- @foreach ($departments as $department)
                    @isset($_GET['department'])
                      <option value="{{ $department->id }}" @if($_GET['department'] == $department->id) selected @endif>{{ $department->name }}</option>
                    @else
                      <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endisset
                  @endforeach --}}
                {{-- </select> --}}
              {{-- </div>
              <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form> --}}
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Father's name</th>
                  <th>Mother's name</th>
                  <th>Roll </th>
                  <th>Reg</th>
                  <th>Class</th>
                  <th>Phone</th>
                  <th>Admission year</th>
                  <th>Picture</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($students) > 0)
                  @foreach ($students as $key => $student)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $student->first_name }}</td>
                      <td>{{ $student->last_name }}</td>
                      <td>{{ $student->father_name }}</td>
                      <td>{{ $student->mother_name }}</td>
                      <td>{{ $student->roll_num }}</td>
                      <td>{{ $student->reg_num }}</td>
                      <td>{{ numberToText($student->class) }}</td>
                      <td>{{ $student->phone }}</td>
                      <td>{{ $student->admission_year }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" alt="student image" width="100px" height="100px">
                      </td>
                      <td>
                        @if ($student->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.student.delete', $student->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="10" class="text-center">No student found</td>
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
