@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>News List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.news.add') }}" class="btn btn-info float-right">Add New</a>
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
                  <!-- <th>Attachment</th> -->
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($news) > 0)
                  @foreach ($news as $key => $news)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $news->title }}</td>
                      <td>
                        <?php 
                            $description =  strip_tags(html_entity_decode($news->description));
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
                            <a href="#" class="desc-text" onclick="descModalShow({{ $news->id }})"> <u>View Details</u></a>
                        @else
                            {!! $news->description !!}
                        @endif
                        <!-- {!! Str::limit($description, $limit = 30, $end = '. . .<a href="#" class="desc-text" onclick="descModalShow()">View Details</a>') !!} -->
                        <div id="description{{ $news->id }}" class="d-none">
                            {!! $news->description !!}
                            @if($news->photo)
                                <img class="newsModalImage" id="newsModalImage" src="{{ asset('assets/images/uploads/news') }}/{{ $news->photo }}">
                            @endif
                        </div>
                      </td>
                      <!-- <td class="text-center">
                        @if($news->file)
                          <a href="{{ asset('assets/files/uploads/news') }}/{{ $news->file }}" target="_blank"><i class="fas fa-download"></i></a>
                        @endif
                      </td> -->
                      <td>
                        @if ($news->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.news.delete', $news->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No news found</td>
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
        <h5 class="modal-title" id="scrollmodalLabel">News Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="newsDetailsWrapper">
          
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
        $("#newsDetailsWrapper").html(description);
        $("#scrollmodal").modal("show");
    }
  </script>
@endpush