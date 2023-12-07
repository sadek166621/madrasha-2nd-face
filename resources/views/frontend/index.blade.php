@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<section class="front-part">
		<div class="container main-area-bg">
			<div class="row">
				<div class="col-md-9">
					<div class="content-left">
											<article id="post-3390">

													<div class="entry">
														</div>
						</article>

						<div class="front-notices-area">
							<div class="notices-front">
		<div class="notices-front-board">
			<div class="notices-items">
				<h2>Notice Board</h2>
				<ul class="notices_front_list">
					@foreach ($notices as $key => $notice)
					<li class="notice-item text-left">
						<div class="notice-title">
							<h5><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('notice.show', $notice->id) }}">{{ $notice->title }}</a></h5>
						</div>
					</li>
					@endforeach

												</ul>
				<h4 class="text-right"><a href="notices">View All</a></h4>
			</div>
		</div>
	</div>					</div><!-- End Notices section -->
						{{-- <div class="front-news-area">
							<div class="new-scroll" style="padding: 10px 0px 0px;background: #E6E7E8;margin: 10px 0px;vertical-align: middle;display: inline-block;">
		<div class="row">
			<div class="col-md-2">
				<h2 class="text-center">News:</h2>
			</div>
			<div class="col-md-8">

				<ul class="news-ticker" style="height: 56px;">
					@foreach ($news as $key => $data)
					<li>
						<h5 class="text-left">
							<i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('news.show', $data->id) }}">{{ $data->title }}</a>
						</h5>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-2">
				<h4 class="text-center"><a href="news">All</a></h4>
			</div>
		</div>
	</div>					</div><!-- End News section --> --}}
						<div class="front-boxs-area">
							<div class="boxs-front">
		<div class="boxs-front-board">
			<div class="row">


				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Download Recorded Class</h3>
						</div>
						<div class="box-img">
												<img width="110" height="100" src="	https://ngdc.ac.bd/wp-content/uploads/2021/06/download-1.jpg" class="thumbs wp-post-image" alt="" loading="lazy" />										</div>
						<div class="box-text" style="width: 69%!important">
							<ul>
						<li><a href="#">Audio</a></li>
						<li><a href="#">Video</a></li>
						</ul>
						</div>
					</div>
				</div>

				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Weekly Dars</h3>
						</div>
						<div class="box-img">
												<a href="{{ route('weekly.dars') }}">
                                                    <img width="135" height="129" src="{{ asset('assets') }}/images/uploads/sliders/wkydrks.jpg" class="thumbs wp-post-image" alt="" loading="lazy" />
                                                </a>
                                            </div>
						<div class="box-text">

						</div>
					</div>
				</div>
				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Important News </h3>
						</div>
						<div class="box-img">
												<img width="135" height="129" src="https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png" class="thumbs wp-post-image" alt="" loading="lazy" />										</div>
						<div class="box-text">

						</div>
					</div>
				</div>


				{{-- <div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Weekly Dars</h3>
						</div>
						<div class="box-img">
						<img width="512" height="512" src="" class="thumbs wp-post-image" alt="" loading="lazy" srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png 512w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-300x300.png 300w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" />										</div>
						<div class="box-text">

						</div>
					</div>
				</div> --}}


									</div>
		</div>
	</div>					</div><!-- End Boxs section -->


						<!-- End News section -->
					</div><!-- content-left -->
				</div> <!-- End Column 8 -->
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
