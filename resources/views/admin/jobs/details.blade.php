{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
        }
        .card-header {
            background-color: #3c679b;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Teachers Information
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <strong>ID</strong>
                    </div>
                    <div class="col-8">
                        <p>001</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <strong>Name</strong>
                    </div>
                    <div class="col-8">
                        <p>John Doe</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <strong>Email</strong>
                    </div>
                    <div class="col-8">
                        <p>john.doe@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <strong>Phone</strong>
                    </div>
                    <div class="col-8">
                        <p>1234567890</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <strong>Subject</strong>
                    </div>
                    <div class="col-8">
                        <p>Mathematics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}

@extends('admin.layouts.master')
@section('content')
<style>
    
    .card {
        border: none;
    }
    .card-header {
        background-color: #3c679b;
        color: white;
    }
</style>
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
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Teachers Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>First Name</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->first_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Middle Name</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->middle_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Last Name</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->last_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Address</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->full_address }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Upazilla</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->upazilla }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>District</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->district }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Zip Code</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->zip_code }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Email</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Number</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->number }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Date of Birth</strong>
                                        </div>
                                        <div class="col-8">
                                            {{-- <p>{{ $details->day }}</p>/<p>{{ $details->month }}</p>/<p>{{ $details->year }}</p> --}}
                                            <strong>{{ $details->day }}</strong>/<strong>{{ $details->month }}</strong>/<strong>{{ $details->year }}</strong>
                                            
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Apply For Position</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->apply_for_position }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Desired</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->desired }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Training Experience</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->training_experience }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Online Work</strong>
                                        </div>
                                        <div class="col-8">
                                            <p>{{ $details->online_work }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Cv</strong>
                                        </div>
                                        <div class="col-8">
                                            <a href="{{ asset('assets/files/uploads/cv') }}/{{ $details->cv }}" target="_blank"><i class="fas fa-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>Document</strong>
                                        </div>
                                        <div class="col-8">
                                            <a href="{{ asset('assets/files/uploads/document') }}/{{ $details->document }}" target="_blank"><i class="fas fa-download"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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