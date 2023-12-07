@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Teachers Job List</h1>
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
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Number</th>
                  <th>Cv</th>
                  <th>Document</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($jobs) > 0)
                  @foreach ($jobs as $key => $job)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $job->first_name }}</td>
                      <td>
                        {{ $job->full_address }}
                      </td>
                      <td>
                        {{ $job->email }}
                      </td>
                      <td>
                        {{ $job->number }}
                      </td>
                      <td class="text-center">
                        @if($job->cv)
                          <a href="{{ asset('assets/files/uploads/cv') }}/{{ $job->cv }}" target="_blank"><i class="fas fa-download"></i></a>
                        @endif
                      </td>
                      <td class="text-center">
                        @if($job->document)
                          <a href="{{ asset('assets/files/uploads/document') }}/{{ $job->document }}" target="_blank"><i class="fas fa-download"></i></a>
                        @endif
                      </td>
                      
                      
                      <td>
                    <a href="{{ route('admin.job.details', $job->id) }}"><i class="fas fa-eye"></i> View</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No Jobs found</td>
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
@endpush