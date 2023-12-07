@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quran Campus Male </h1>
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
          <form action="{{ route('admin.quran-campus-male.update', $quran_k->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            <h1 class="text-center mt-5" style="color: blue"><u>Quran Campus Kid</u></h1>

            <div class="card-body">
              <h3 class="text-center mt-5"><u>Quran Reading Course</u></h3>
              
              <div class="form-group">
                <label for="address">Quran Reading Course</label>
                <textarea name="Quran_Reading_Course" id="Quran_Reading_Course" cols="30" rows="10" class="form-control">{{$quran_k->Quran_Reading_Course}}</textarea>
              </div>

              <h3 class="text-center mt-5"><u>Quranic Arabic Course</u></h3>
              
              <div class="form-group">
                <label for="address">Quranic Arabic Course</label>
                <textarea name="Quranic_Arabic_Course" id="Quranic_Arabic_Course" cols="30" rows="10" class="form-control">{{$quran_k->Quranic_Arabic_Course}}</textarea>
              </div>


              <h3 class="text-center mt-5"><u>Quran Memorization Course (Hifz)</u></h3>
              
              <div class="form-group">
                <label for="address">Quran Memorization Course (Hifz)</label>
                <textarea name="Quran_Memorization_Course" id="Quran_Memorization_Course" cols="30" rows="10" class="form-control">{{$quran_k->Quran_Memorization_Course}}</textarea>
              </div>

            </div>

            <h1 class="text-center mt-5" style="color: blue"><u>Quran Campus Adult</u></h1>

            <div class="card-body">
              <h3 class="text-center mt-5"><u>Quran Reading Course</u></h3>
              
              <div class="form-group">
                <label for="address">Quran Reading Course</label>
                <textarea name="Quran_Reading_Course_a" id="Quran_Reading_Course_a" cols="30" rows="10" class="form-control">{{$quran_k->Quran_Reading_Course_a}}</textarea>
              </div>

              <h3 class="text-center mt-5"><u>Quranic Arabic Course</u></h3>
              
              <div class="form-group">
                <label for="address">Quranic Arabic Course</label>
                <textarea name="Quranic_Arabic_Course_a" id="Quranic_Arabic_Course_a" cols="30" rows="10" class="form-control">{{$quran_k->Quranic_Arabic_Course_a}}</textarea>
              </div>


              <h3 class="text-center mt-5"><u>Quran Memorization Course (Hifz)</u></h3>
              
              <div class="form-group">
                <label for="address">Quran Memorization Course (Hifz)</label>
                <textarea name="Quran_Memorization_Course_a" id="Quran_Memorization_Course_a" cols="30" rows="10" class="form-control">{{$quran_k->Quran_Memorization_Course_a}}</textarea></textarea>
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

        $('#Quranic_Arabic_Course').summernote();
        $('#Quran_Reading_Course').summernote();
        $('#Quran_Memorization_Course').summernote();
        $('#Quranic_Arabic_Course_a').summernote();
        $('#Quran_Reading_Course_a').summernote();
        $('#Quran_Memorization_Course_a').summernote();
     });
</script>
@endpush
