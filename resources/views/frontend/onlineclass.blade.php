@extends('frontend.master')
@section('content')
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
                        <h2>Online Class</h2>
						<article id="post-10">
                            <div class="entry">
								<table class="newspaper-n">
									<tbody>
										<tr>
											<th align="center">SL</th>
											<th align="left">Class</th>
											<th align="center">Section</th>
											<th align="center">Link</th>
										</tr>
										@if(count($onlineclass) > 0)
											@foreach ($onlineclass as $key => $online)
												<tr>
													<td align="center">{{ $key+1 }}</td>
													<td align="left">{{ $online->class }}</td>
													<td align="left">{{ $online->section }}</td>
													<td align="center" class="text-center">
														@if($online->link)
                                                        <a href="https://{{ $online->link }}/" target="_blank"><i class="fa fa-link"></i></a>
														@endif
													</td>
												</tr>
											@endforeach
										@else
											<tr><td colspan="4" class="text-center">No Online Class found</td></tr>
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
