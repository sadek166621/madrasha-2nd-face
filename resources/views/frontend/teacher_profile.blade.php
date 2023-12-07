@extends('frontend.master')
@section('content')
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
						<div class="card  mb-3 card-outline card-primary">
							<div class="card-body">
								<div class="row">
									<div class="col-md-3 col-sm-12 mb-sm-2 mb-2 mb-md-0 mb-lg-0 d-inline-flex flex-column align-items-left">
											<img class="img-thumbnail" src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" width="200px" height="200px">
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="intro_list">
											<h4 class="">{{ $teacher->name }}</h4>
											<div class="text-capitalize">
												<b>{{ $teacher->designation }}</b>
											</div>
											<div class="">
												<b> {{ $teacher->department->name }}</b>
											</div>

											<div class="my-2">
												<p class="mb-0"><span class="fa fa-calendar mr-2"></span>  {{ $teacher->join_date }} (Joining date)</p>
												<p class="mb-0"><span class="fa fa-user-graduate mr-2"></span>{{ $teacher->edu_qualification }}</p>
												<p class="mb-0"><span class="fa fa-history mr-2"></span>{{ $teacher->experience }}</p>
												<p class="mb-0"><span class="fa fa-envelope mr-2"></span>{{ $teacher->email }}</p>
												<p class="mb-0"><span class="fa fa-phone-square mr-2"></span> {{ $teacher->phone }}</p>
											</div>
											<div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- End News section -->
				<!-- content-left -->
			<!-- End Column 8 -->
			@include('frontend.include.side-bar')
		</div>
	</div>
</section>


	</div><!-- #content -->
	<div class="container" style="display:none;">
		<div class="bottom-logos text-center">
			<div class="row">
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.ictd.gov.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
						<h6>Information & Communication Technology Division</h6>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.bcc.net.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
						<h6>Bangladesh Computer Council</h6>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.jica.go.jp/english/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
						<h6>Japan International Cooperation Agency</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
<section class="bottom-area" style="background:#ddd;margin:60px 0px 0px 0px;padding:40px 0px;display:none;">
	<div class="container">
		<div class="bottom-part">
			<div class="bottom-part1">
				<div class="bottom-contact-part text-black">
									</div>
			</div>
			<div class="bottom-part2">
				<div class="bottom-get-started-part">
									</div>
			</div>
		</div>
	</div>
</section>
	@endsection
