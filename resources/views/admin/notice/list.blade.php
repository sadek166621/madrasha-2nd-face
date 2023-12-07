@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Notice List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.notice.add') }}" class="btn btn-info float-right">Add New</a>
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
                  <th>Description</th>
                  <th>Attachment</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($notices) > 0)
                  @foreach ($notices as $key => $notice)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $notice->title }}</td>
                      <td>
                        <?php 
                            $description =  strip_tags(html_entity_decode($notice->description));
                            if (strlen($description) > 30) {

                                // truncate string
                                $stringCut = substr($description, 0, 30);
                                $endPoint = strrpos($stringCut, ' ');
                            
                                //if the string doesn't contain any space then it will cut without word basis.
                                $desc = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $desc .= '...';
                            }                                                            
                        ?>
                        @if (strlen($description) > 30)
                            {!! $desc !!}
                            <a href="#" class="desc-text" onclick="descModalShow({{ $notice->id }})"> <u>View Details</u></a>
                        @else
                            {!! $notice->description !!}
                        @endif
                        <!-- {!! Str::limit($description, $limit = 30, $end = '. . .<a href="#" class="desc-text" onclick="descModalShow()">View Details</a>') !!} -->
                        <div id="description{{ $notice->id }}" class="d-none">
                            {!! $notice->description !!}
                            @if($notice->photo)
                                <img class="noticeModalImage" id="noticeModalImage" src="{{ asset('assets/images/uploads/notices') }}/{{ $notice->photo }}">
                            @endif
                        </div>
                      </td>
                      <td class="text-center">
                        @if($notice->file)
                          <a href="{{ asset('assets/files/uploads/notices') }}/{{ $notice->file }}" target="_blank"><i class="fas fa-download"></i></a>
                        @endif
                      </td>
                      <td>
                        @if ($notice->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.notice.delete', $notice->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No notice found</td>
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