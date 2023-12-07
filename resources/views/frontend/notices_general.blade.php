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
					<div class="col-md-3">
						<div class="content-right">
							<div id="text-2" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">Message from Principal</h3></div>			<div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-3521" src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" alt="" width="225" height="224" srcset="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" sizes="(max-width: 225px) 100vw, 225px" /></p>
		<p><a class="" href="{{ route('principalMessage') }}">View Details →</a></p>
		</div>
				</div><div id="text-3" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">Message from Vice Principal</h3></div>			<div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-3525" src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->vice_principal_image }}" alt="" width="225" height="224" srcset="{{ asset('assets') }}/images/uploads/settings/{{ $setting->vice_principal_image }}" sizes="(max-width: 225px) 100vw, 225px" /></p>
		<p><a class="" href="{{ route('vicePrincipalMessage') }}">View Details →</a></p>
		</div>
				</div><div id="text-9" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">স্বাধীনতার সুবর্ণজয়ন্তী</h3></div>			<div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-3554" src="https://ngdc.ac.bd/wp-content/uploads/2022/04/bangladesh-50.jpg" alt="" width="300" height="168" /></p>
		<h5 style="text-align: center;"><a title="মুজিব বর্ষে কর্মপরিকল্পনা" href="http://shed.portal.gov.bd/sites/default/files/files/shed.portal.gov.bd/npfblock//%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%B7%E0%A7%87%20%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE1.pdf"><strong>মুজিব বর্ষে কর্মপরিকল্পনা</strong></a></h5>
		</div>
				</div><div id="nav_menu-2" class="sidebar-widget widget widget_nav_menu"><div class="widget-heading"><h3 class="widget-title">Important Links</h3></div><div class="menu-important-links-container"><ul id="menu-important-links" class="menu"><li id="menu-item-3513" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3513"><a href="http://rajshahieducationboard.gov.bd/">Rajshahi Education Board</a></li>
		<li id="menu-item-3514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3514"><a href="http://www.dshe.gov.bd/">Directorate of Education</a></li>
		<li id="menu-item-3515" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3515"><a href="http://nu.ac.bd/">National University</a></li>
		<li id="menu-item-3516" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3516"><a href="http://www.ru.ac.bd/">Rajshahi University</a></li>
		<li id="menu-item-3517" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3517"><a href="http://www.bangladesh.gov.bd/">National Web Portal</a></li>
		<li id="menu-item-3518" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3518"><a href="http://www.rajshahidiv.gov.bd/">Rajshahi Division Portal</a></li>
		<li id="menu-item-3519" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3519"><a href="http://www.erajshahi.gov.bd/">Rajshahi City Corporation</a></li>
		<li id="menu-item-3520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3520"><a href="http://www.rajshahi.gov.bd/">Rajshahi District Portal</a></li>
		</ul></div></div><div id="nav_menu-3" class="sidebar-widget widget widget_nav_menu"><div class="widget-heading"><h3 class="widget-title">Quick Links</h3></div><div class="menu-quick-links-container"><ul id="menu-quick-links" class="menu"><li id="menu-item-3485" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3485"><a target="_blank" rel="noopener" href="http://www.pmo.gov.bd/">প্রধানমন্ত্রীর কার্যালয়</a></li>
		<li id="menu-item-3486" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3486"><a target="_blank" rel="noopener" href="http://www.bangabhaban.gov.bd/">রাষ্ট্রপতির কার্যালয়</a></li>
		<li id="menu-item-3487" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3487"><a target="_blank" rel="noopener" href="http://www.cabinet.gov.bd/">মন্ত্রিপরিষদ বিভাগ</a></li>
		<li id="menu-item-3488" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3488"><a target="_blank" rel="noopener" href="http://www.mopa.gov.bd/">জনপ্রশাসন মন্ত্রণালয়</a></li>
		<li id="menu-item-3489" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3489"><a target="_blank" rel="noopener" href="http://www.mof.gov.bd/en/">অর্থ মন্ত্রণালয়</a></li>
		<li id="menu-item-3490" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3490"><a target="_blank" rel="noopener" href="http://www.bangladesh.gov.bd/www.bangladesh.gov.bd/index16f0.html?q=bn">জাতীয় পোর্টাল</a></li>
		<li id="menu-item-3491" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3491"><a target="_blank" rel="noopener" href="http://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>
		<li id="menu-item-3492" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3492"><a target="_blank" rel="noopener" href="http://dshe.gov.bd/">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
		<li id="menu-item-3493" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3493"><a target="_blank" rel="noopener" href="http://naem.gov.bd/">জাতীয় শিক্ষা ব্যবস্থাপনা একাডেমি (নায়েম)</a></li>
		<li id="menu-item-3494" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3494"><a target="_blank" rel="noopener" href="http://www.banbeis.gov.bd/">বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস)</a></li>
		<li id="menu-item-3495" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3495"><a href="https://www.nothi.gov.bd/">ই-নথি</a></li>
		</ul></div></div><div id="nav_menu-4" class="sidebar-widget widget widget_nav_menu"><div class="widget-heading"><h3 class="widget-title">Sidebar Menu</h3></div><div class="menu-sidebar-menu-container"><ul id="menu-sidebar-menu" class="menu"><li id="menu-item-3496" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3496"><a target="_blank" rel="noopener" href="#">Student Log in</a></li>
		<li id="menu-item-3497" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3497"><a target="_blank" rel="noopener" href="#">Teacher Log in</a></li>
		<li id="menu-item-3498" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3498"><a target="_blank" rel="noopener" href="#">e-Payment</a></li>
		<li id="menu-item-3499" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3499"><a target="_blank" rel="noopener" href="#">e-Library</a></li>
		<li id="menu-item-3500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3500"><a target="_blank" rel="noopener" href="#">College Mates</a></li>
		</ul></div></div><div id="nav_menu-5" class="sidebar-widget widget widget_nav_menu"><div class="widget-heading"><h3 class="widget-title">Useful Links</h3></div><div class="menu-useful-links-container"><ul id="menu-useful-links" class="menu"><li id="menu-item-3501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3501"><a target="_blank" rel="noopener" href="http://www.bangladesh.gov.bd/">National Web Portal</a></li>
		<li id="menu-item-3502" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3502"><a target="_blank" rel="noopener" href="https://www.nu.ac.bd">National University</a></li>
		<li id="menu-item-3503" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3503"><a target="_blank" rel="noopener" href="#">Education Board,</a></li>
		<li id="menu-item-3504" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3504"><a target="_blank" rel="noopener" href="https://www.eshikkha.net">e-Shikhha</a></li>
		<li id="menu-item-3505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3505"><a target="_blank" rel="noopener" href="https://www.muktopaath.gov.bd">Muktopaath</a></li>
		<li id="menu-item-3506" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3506"><a target="_blank" rel="noopener" href="https://www.teachers.gov.bd">Shikkhak Batayon</a></li>
		<li id="menu-item-3507" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3507"><a target="_blank" rel="noopener" href="https://eksheba.gov.bd">eksheba</a></li>
		<li id="menu-item-3508" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3508"><a target="_blank" rel="noopener" href="http://emis.gov.bd">EMIS | DSHE</a></li>
		<li id="menu-item-3509" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3509"><a target="_blank" rel="noopener" href="http://www.payfixation.gov.bd">Integrated Budget And Accounting System</a></li>
		<li id="menu-item-3510" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3510"><a target="_blank" rel="noopener" href="https://ibas.finance.gov.bd">IBAS++ Version Selector</a></li>
		<li id="menu-item-3511" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3511"><a target="_blank" rel="noopener" href="http://www.dip.gov.bd">ইমিগ্রেশন ও পাসপোর্ট অধিদপ্তর</a></li>
		<li id="menu-item-3512" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3512"><a href="http://forms.mygov.bd/">বাংলাদেশ ফরম</a></li>
		</ul></div></div><div id="calendar-2" class="sidebar-widget widget widget_calendar"><div class="widget-heading"><h3 class="widget-title">Calendar</h3></div><div id="calendar_wrap" class="calendar_wrap"><table id="wp-calendar" class="wp-calendar-table">
			<caption>September 2023</caption>
			<thead>
			<tr>
				<th scope="col" title="Monday">M</th>
				<th scope="col" title="Tuesday">T</th>
				<th scope="col" title="Wednesday">W</th>
				<th scope="col" title="Thursday">T</th>
				<th scope="col" title="Friday">F</th>
				<th scope="col" title="Saturday">S</th>
				<th scope="col" title="Sunday">S</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td colspan="4" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td>
			</tr>
			<tr>
				<td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
			</tr>
			<tr>
				<td id="today">11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
			</tr>
			<tr>
				<td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
			</tr>
			<tr>
				<td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
				<td class="pad" colspan="1">&nbsp;</td>
			</tr>
			</tbody>
			</table><nav aria-label="Previous and next months" class="wp-calendar-nav">
				<span class="wp-calendar-nav-prev"><a href="https://ngdc.ac.bd/2023/02/">&laquo; Feb</a></span>
				<span class="pad">&nbsp;</span>
				<span class="wp-calendar-nav-next">&nbsp;</span>
			</nav></div></div><div id="text-4" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">জরুরি হটলাইন</h3></div>			<div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-3527" src="https://ngdc.ac.bd/wp-content/uploads/2022/02/biwta.jpeg" alt="" width="413" height="166" srcset="https://ngdc.ac.bd/wp-content/uploads/2022/02/biwta.jpeg 413w, https://ngdc.ac.bd/wp-content/uploads/2022/02/biwta-300x121.jpeg 300w" sizes="(max-width: 413px) 100vw, 413px" /> <img loading="lazy" class="aligncenter size-full wp-image-3528" src="https://ngdc.ac.bd/wp-content/uploads/2022/02/National-Helpline.jpg" alt="" width="415" height="1092" srcset="https://ngdc.ac.bd/wp-content/uploads/2022/02/National-Helpline.jpg 415w, https://ngdc.ac.bd/wp-content/uploads/2022/02/National-Helpline-114x300.jpg 114w, https://ngdc.ac.bd/wp-content/uploads/2022/02/National-Helpline-389x1024.jpg 389w" sizes="(max-width: 415px) 100vw, 415px" /></p>
		</div>
				</div><div id="text-5" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">করোনা ভাইরাস প্রতিরোধে যোগাযোগ</h3></div>			<div class="textwidget"><p><a href="https://corona.gov.bd/"><img loading="lazy" class="aligncenter size-full wp-image-3530" src="https://ngdc.ac.bd/wp-content/uploads/2022/02/corona_new.jpg" alt="" width="600" height="600" srcset="https://ngdc.ac.bd/wp-content/uploads/2022/02/corona_new.jpg 600w, https://ngdc.ac.bd/wp-content/uploads/2022/02/corona_new-300x300.jpg 300w, https://ngdc.ac.bd/wp-content/uploads/2022/02/corona_new-150x150.jpg 150w" sizes="(max-width: 600px) 100vw, 600px" /></a></p>
		</div>
				</div><div id="text-6" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">একদেশ</h3></div>			<div class="textwidget"><p><a href="http://ekdesh.ekpay.gov.bd/"><img loading="lazy" class="aligncenter size-full wp-image-3531" src="https://ngdc.ac.bd/wp-content/uploads/2022/02/ekdesh.jpg" alt="" width="600" height="600" srcset="https://ngdc.ac.bd/wp-content/uploads/2022/02/ekdesh.jpg 600w, https://ngdc.ac.bd/wp-content/uploads/2022/02/ekdesh-300x300.jpg 300w, https://ngdc.ac.bd/wp-content/uploads/2022/02/ekdesh-150x150.jpg 150w" sizes="(max-width: 600px) 100vw, 600px" /></a></p>
		</div>
				</div><div id="text-7" class="sidebar-widget widget widget_text"><div class="widget-heading"><h3 class="widget-title">ডেঙ্গু প্রতিরোধে করণীয়</h3></div>			<div class="textwidget"><p><a href="https://bangladesh.gov.bd/site/page/91530698-c795-4542-88f2-5da1870bd50c"><img loading="lazy" class="aligncenter size-full wp-image-3532" src="https://ngdc.ac.bd/wp-content/uploads/2022/02/dengu.jpg" alt="" width="220" height="200" /></a></p>
		</div>
		</div>				</div>
			</div>
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

