@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Weekly</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.weekly.add') }}" class="btn btn-info float-right">Add New</a>
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
                  <th>Class</th>
                  <th>Section</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($Weekly) > 0)
                  @foreach ($Weekly as $key => $online)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $online->class }}</td>
                      <td>
                       {{ $online->section }}
                      </td>
                      <td class="text-center">
                        @if($online->link)
                          <a href="https://{{ $online->link }}/" target="_blank"><i class="fas fa-link"></i></a>
                        @endif
                      </td>
                      <td>
                        @if ($online->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.weekly.edit', $online->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.weekly.delete', $online->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No Weekly Dars found</td>
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

@endpush
