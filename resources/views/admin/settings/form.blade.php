@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Site Settings</h1>
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
          <form action="{{ route('admin.setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Site Name</label>
                <input type="text" name="site_name" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{ $setting->site_name }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Site Title</label>
                <input type="text" name="site_title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{ $setting->site_title }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sub Tagline</label>
                <input type="text" name="site_tagline" class="form-control" id="exampleInputEmail1" placeholder="Enter subtitle" value="{{ $setting->site_tagline }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact No</label>
                <input type="text" name="site_contact_no" class="form-control" id="exampleInputEmail1" placeholder="Enter button link" value="{{ $setting->site_contact_no }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="site_email" class="form-control" id="exampleInputEmail1" placeholder="Enter button text" value="{{ $setting->site_email }}">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea name="site_address" id="address" cols="30" rows="10" class="form-control">{{ $setting->site_address }}</textarea>
              </div>
              <div class="form-group">
                <label for="google_map_link">Google map link (Embedded Link)</label>
                <input type="text" name="google_map_link" class="form-control" id="google_map_link" placeholder="Enter google map link" value="{{ $setting->google_map_link }}">
              </div>
              <div class="form-group">
                <label for="youtube_video_left_link">Youtube video left link (Embedded Link)</label>
                <input type="text" name="youtube_video_left_link" class="form-control" id="youtube_video_left_link" placeholder="Enter youtube video left link" value="{{ $setting->youtube_video_left_link }}">
              </div>
              <div class="form-group">
                <label for="youtube_video_right_link">Youtube video right link (Embedded Link)</label>
                <input type="text" name="youtube_video_right_link" class="form-control" id="youtube_video_right_link" placeholder="Enter youtube video right link" value="{{ $setting->youtube_video_right_link }}">
              </div>
              <div class="form-group">
                @if($setting->site_logo) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->site_logo }}" alt="Site logo" width="70px"><br/> @endif
                <label for="exampleInputFile">Change Logo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="site_logo" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                @if($setting->site_icon) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->site_icon }}" alt="Site fav icon" width="70px"><br/> @endif
                <label for="exampleInputFile">Change Fav Icon</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="site_icon" class="form-control">
                  </div>
                </div>
              </div>
              <p></p>

              <!-- ----------------Vice Pricipal-------------- -->
              <h3 class="text-center mt-5"><u>Vice Principal Section</u></h3>
              <div class="form-group">
                <label for="exampleInputEmail1">Message From</label>
                <input type="text" name="message_from_2" class="form-control" id="" placeholder="Message from" value="{{ $setting->message_from_2 }}">
              </div>
              <div class="form-group">
                @if($setting->vice_principal_image) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->vice_principal_image }}" name="vice_principal_image" alt="Site fav icon" width="70px"><br/> @endif
                <label for="exampleInputFile">Vice Principal Image</label>

                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="vice_principal_image" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Vice Principal Name</label>
                <input type="text" name="vice_principal_name" class="form-control" id="vice_principal_name" placeholder="Enter vice pricipal name" value="{{ $setting->vice_principal_name }}">
              </div>
              <div class="form-group">
                <label for="address">Vice Principal Bio</label>
                <textarea name="vice_principal_bio" id="vice_principal_bio" cols="30" rows="10" class="form-control">{{ $setting->vice_principal_bio }}</textarea>
              </div>
              <div class="form-group">
                <label for="address">Vice Principal Message</label>
                <textarea name="vice_principal_message" id="vice_principal_message" cols="30" rows="10" class="form-control">{{ $setting->vice_principal_message }}</textarea>
              </div>

              <!-- ----------------Pricipal-------------- -->
              <h3 class="text-center mt-5"><u>Principal Section</u></h3>
              <div class="form-group">
                <label for="exampleInputEmail1">Message Form</label>
                <input type="text" name="message_from_1" class="form-control" id="" placeholder="Message from" value="{{ $setting->message_from_1 }}">
              </div>
              <div class="form-group">
                @if($setting->principal_image) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" name="principal_image" alt="Site fav icon" width="70px"><br/> @endif
                <label for="exampleInputFile">Principal Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="principal_image" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Principal Name</label>
                <input type="text" name="principal_name" class="form-control" id="principal_name" placeholder="Enter pricipal name" value="{{ $setting->principal_name }}">
              </div>
              <div class="form-group">
                <label for="address">Principal Bio</label>
                <textarea name="principal_bio" id="principal_bio" cols="30" rows="10" class="form-control">{{ $setting->principal_bio }}</textarea>
              </div>
              <div class="form-group">
                <label for="address">Principal Message</label>
                <textarea name="principal_message" id="principal_message" cols="30" rows="10" class="form-control">{{ $setting->principal_message }}</textarea>
              </div>

              {{-- --------------- Important Links---------------- --}}

              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 1</label>
                <input type="text" name="important_link_text_1" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 1" value="{{ $setting->important_link_text_1 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link 1</label>
                <input type="text" name="important_link_1" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 1" value="{{ $setting->important_link_1 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 2</label>
                <input type="text" name="important_link_text_2" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 2" value="{{ $setting->important_link_text_2 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  2</label>
                <input type="text" name="important_link_2" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  2" value="{{ $setting->important_link_2 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 3</label>
                <input type="text" name="important_link_text_3" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 3" value="{{ $setting->important_link_text_3 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  3</label>
                <input type="text" name="important_link_3" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  3" value="{{ $setting->important_link_3 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 4</label>
                <input type="text" name="important_link_text_4" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 4" value="{{ $setting->important_link_text_4 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  4</label>
                <input type="text" name="important_link_4" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  4" value="{{ $setting->important_link_4 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 5</label>
                <input type="text" name="important_link_text_5" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 5" value="{{ $setting->important_link_text_5 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  5</label>
                <input type="text" name="important_link_5" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  5" value="{{ $setting->important_link_5 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 6</label>
                <input type="text" name="important_link_text_6" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 6" value="{{ $setting->important_link_text_6 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  6</label>
                <input type="text" name="important_link_6" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  6" value="{{ $setting->important_link_6 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 7</label>
                <input type="text" name="important_link_text_7" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 7" value="{{ $setting->important_link_text_7 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  7</label>
                <input type="text" name="important_link_7" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  7" value="{{ $setting->important_link_7 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link Text 8</label>
                <input type="text" name="important_link_text_8" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link Text 8" value="{{ $setting->important_link_text_8 }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Important Link  8</label>
                <input type="text" name="important_link_8" class="form-control" id="exampleInputEmail1" placeholder="Enter Important Link  8" value="{{ $setting->important_link_8 }}">
              </div>

              {{-- --------------Contact---------- --}}
              <h3 class="text-center mt-5"><u>Contact Us</u></h3>

              <div class="form-group">
                <label for="exampleInputEmail1">Contact Us</label>
                <textarea name="contact" id="contact" cols="30" rows="10" class="form-control">{{ $setting->contact }}</textarea>
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

        $('#vice_principal_message').summernote();
        $('#vice_principal_bio').summernote();
        $('#contact').summernote();

        $('#principal_message').summernote();
        $('#principal_bio').summernote();
     });
</script>
@endpush
