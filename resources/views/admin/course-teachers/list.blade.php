@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Course-Teachers</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.course-teachers.add') }}" class="btn btn-info float-right">Add New</a>
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
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Course</th>
                  <th>Teachers Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($courseteachers) > 0)
                  @foreach ($courseteachers as $key => $courseteacher)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        {{ $courseteacher->course->name }}
                      </td>
                      <td>
                       {{ $courseteacher->teacher->name }}
                      </td>
                      <td>
                        <a href="{{ route('admin.course-teachers.edit', $courseteacher->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.course-teachers.delete', $courseteacher->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No Course-Teacher found</td>
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
@push('js')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush
