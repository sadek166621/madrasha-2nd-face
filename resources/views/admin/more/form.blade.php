@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>More Sections</h1>
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
          <form action="{{ route('admin.more.update', $more->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="card-body">
              <h3 class="text-center mt-5"><u>Basics of Islam Campus</u></h3>
              
              <div class="form-group">
                <label for="address">Basics of Islam Campus</label>
                <textarea name="BasicsofIslamCampus" id="BasicsofIslamCampus" cols="30" rows="10" class="form-control">{{$more->BasicsofIslamCampus}}</textarea>
              </div>

              <h3 class="text-center mt-5"><u>Be Part of Us</u></h3>
              
              <div class="form-group">
                <label for="address">Be Part of Us</label>
                <textarea name="BePartofUs" id="BePartofUs" cols="30" rows="10" class="form-control">{{$more->BePartofUs}}</textarea>
              </div>


              <h3 class="text-center mt-5"><u>Donate Us</u></h3>
              
              <div class="form-group">
                <label for="address">Donate Us</label>
                <textarea name="DonateUs" id="DonateUs" cols="30" rows="10" class="form-control">{{$more->DonateUs}}</textarea>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Save Changes</button>
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
        $('#address').summernote();

        $('#BasicsofIslamCampus').summernote();
        $('#BePartofUs').summernote();
        $('#DonateUs').summernote();
       
     });
</script>
@endpush
