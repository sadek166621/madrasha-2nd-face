@extends('frontend.master')
@section('content')
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
						<article id="post-10">
                            <div class="entry">
								<table class="newspaper-n">
									<tbody>
										<tr>
											<th align="center">SL</th>
											<th align="left">Notice Title</th>
											<th align="center">Publish Date</th>
											<th align="center">View Details</th>
											<th align="center">Attachment</th>
										</tr>
										@if(count($notices) > 0)
											@foreach ($notices as $key => $notice)
												<tr>
													<td align="center">{{ $key+1 }}</td>
													<td align="left">{{ $notice->title }}</td>
													<td align="center">{{ date('F j, Y', strtotime($notice->created_at)) }}</td>
													<td align="center"><a href="{{ route('notice.show', $notice->id) }}">View Details</a></td>
													<td align="center" class="text-center">
														@if($notice->file)
															<a href="{{ asset('assets/files/uploads/notices') }}/{{ $notice->file }}" target="_blank"><i class="fa fa-download"></i></a>
														@endif
													</td>
												</tr>
											@endforeach
										@else
											<tr><td colspan="4" class="text-center">No Notice found</td></tr>
										@endif
									</tbody>
								</table>
								<hr>
							</div>
						</article>


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
