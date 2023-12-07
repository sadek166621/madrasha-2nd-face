@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Students Registration List</h1>
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
                  <th>Name</th>
                  <th>Registration Date/time</th>
                  <th>Gender</th>
                  <th>Like to Study</th>
                  <th>Suitable Time</th>
                  <th>Payment Number</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($studentregs) > 0)
                  @foreach ($studentregs as $key => $studentreg)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $studentreg->name }}</td>
                      <td>
                        {{ $studentreg->created_at }}
                      </td>
                      <td>
                        {{ $studentreg->gender }}
                      </td>
                      <td>
                        {{ $studentreg->course->name }}
                      </td>
                      <td class="text-center">
                        {{ $studentreg->suitable_time }}
                      </td>
                      <td class="text-center">
                        {{ $studentreg->payment_number }}
                      </td>


                      <td>
                    <a href="{{ route('admin.applied-student.details', $studentreg->id) }}"><i class="fas fa-eye"></i> View</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No students registration found</td>
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
<!-- modal description -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollmodalLabel">Notice Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="noticeDetailsWrapper">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal description -->
@endsection
@push('js')
  <script>
    function descModalShow(id){
        this.event.preventDefault();
        var description = $('#description'+id).html();
        //alert(description);
        $("#noticeDetailsWrapper").html(description);
        $("#scrollmodal").modal("show");
    }
  </script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
@endpush
