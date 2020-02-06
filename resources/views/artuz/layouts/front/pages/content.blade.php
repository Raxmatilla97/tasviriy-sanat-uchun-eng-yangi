     @extends('artuz.layouts.makets.front.sayt')
       @section('content')
           
    
		


		<!-- Begin sliders section  -->


			@yield('sliders')
			
			<!-- End intro section -->


			<!-- Begin services section  -->


          @yield('info-intro')

          		<!-- End services section  -->


		
           <style>
		   
</style>

			<section class="call-to-action-section cta-style-2 bg-image " style="background-image: url({{ ('front/assets/img/pattern/images-7.jpg') }});">

				<!-- Element cover 
				===================
				* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
				* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
				* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
				-->
				<!-- <div class="cover cover-opacity-4"></div> -->

				<div class="cta-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
					<div class="row">
						<div class="col-md-6">

							<!-- Begin tt-heading 
							====================== 
							* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
							* Use class "text-center" or "text-right" to align tt-heading.
							* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
							-->
							<div class="tt-heading tt-heading-xxlg">
								<div class="tt-heading-inner">
									<h1 class="tt-heading-title page-header-caption ph-cap-light">What Next?</h1>
									<div class="tt-heading-subtitle page-header-caption ph-cap-light">Interested in working with us?</div>
									
									<!-- Begin zig-zag separator 
									============================= 
									* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
									* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
									-->
									<div class="zig-zag-separator">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
									<!-- End zig-zag separator -->

								</div> <!-- /.tt-heading-inner -->
							</div>
							<!-- End tt-heading -->

						</div> <!-- /.col -->

						<div class="col-md-6 page-header-caption ph-cap-light">

							<p><h3>Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat sem turpis.</h3></p>
							
							<div class="margin-top-30">
								<a href="contact.html" class="btn btn-primary btn-lg margin-top-5">Let's Work Together!</a>
							</div>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.cta-inner -->
			</section>











  <!--  Blog qismi -->
  <div class="tt-heading tt-heading-lg text-center padding-on">
	<div class="tt-heading-inner">
		<h1 class="tt-heading-title">Pricing Plans</h1>
		<div class="tt-heading-subtitle">Please choose your pricing plan</div>
		
		<!-- Begin zig-zag separator 
		============================= 
		* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
		* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
		-->
		<div class="zig-zag-separator">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<!-- End zig-zag separator -->

		<div class="tt-heading-text">
			<p>Duis mattis quam quis quam cursus, a rutrum ante luctus. Phasellus porta ornare enim ac euismod. Nulla fringilla lectus ac tincidunt viverra.</p>
		</div>

	</div> <!-- /.tt-heading-inner -->
</div>

  <div class="blog-list-inner" >  <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->

	<div class="row no-margin">
	
		<!-- Content column -->
		<div class="col-md-12 no-padding-left no-padding-right">

			<div class="isotope-wrap">
				
				<!-- Begin isotope
				===================
				* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
				* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
				-->
				<div class="isotope col-4 gutter-3">

					<!-- Begin isotope items wrap 
					============================== -->
					<div style="position: relative; height: 1065.63px;" class="isotope-items-wrap no-margin">

						<!-- Grid sizer (do not remove!!!) -->
						<div class="grid-sizer"></div>


						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a style="background-image: url(&quot;{{ ('front/assets/img/blog/list/blog-1.jpg') }}&quot;);" href="blog-single.html" class="bl-item-image bg-image lazy"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Web Design</a> <a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Responsive Web Design: 50 Examples and Best Practices</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 28, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 10</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-2.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>25 Free and Premium Admin HTML Website Templates and Layouts</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 22, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 66</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-3.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Why Designers and Web Developers Must Work Together</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 14, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 3</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 0px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-4.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Time-Saving Tools and Resources for Freelance Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 11, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 0</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 0px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-5.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Tutorials</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>How to Create a Flat Cityscape in Adobe Illustrator</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 331.85px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-7.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>21 tips for Creating a Great Personal Online Portfolio</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 663.7px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-9.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Coding</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Convert PSD to HTML – Useful Resources for Web Designers</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 04, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Kate Dixon">Kate Dixon</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

						<!-- ===================== 
						/// Begin isotope item ///
						====================== -->
						<div style="position: absolute; left: 995.55px; top: 532.817px;" class="isotope-item">

							<!-- Begin blog list item -->
							<article class="blog-list-item">
								
								<!-- Begin blog list item image -->
								<div class="bl-item-image-wrap">
									<a href="blog-single.html" class="bl-item-image bg-image lazy lazy-error" data-src="{{ ('front/assets/img/blog/list/blog-6.jpg') }}"></a>
								</div>
								<!-- End blog list item image -->
								
								<!-- Begin blog list item info -->
								<div class="bl-item-info">
									<div class="bl-item-category">
										<a href="blog-archive.html">Resources</a>
									</div>
									<a href="blog-single.html" class="bl-item-title"><h2>Premium Web Tools &amp; Services Recommended By Professionals</h2></a>
									<div class="bl-item-meta"> 
										<span class="published">Nov 02, 2017</span>
										<span class="posted-by">- by <a href="blog-list-grid-fluid.html#" title="View all posts by Lucas Sanski">Lucas Sanski</a></span>
									</div>
									<div class="bl-item-desc">
										Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl proin...
									</div>

									<!-- Begin blog list item attributes -->
									<ul class="bl-item-attr">
										<li>
											<!-- Begin comments count -->
											<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read comments"><i class="far fa-comment"></i> 8</a>
											<!-- End comments count -->
										</li>
									</ul>
									<!-- End blog list item attributes -->

								</div>
								<!-- End blog list item info -->

							</article>
							<!-- End blog list item -->

						</div>
						<!-- End isotope item -->

					</div>
					<!-- End isotope items wrap -->

				</div>
				<!-- End isotope -->

			</div> <!-- /.isotope-wrap -->


			<!-- Begin tt-pagination 
			========================= 
			* Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
			* Use class "tt-pagin-rounded" to enable pagination rounded style -->
			<div class="tt-pagination-wrap">
				<ul class="tt-pagination">
					
					<li class="active center"><a href="blog-list-grid-fluid.html#0">Barcha yangilik va elonlarni ko'rish</a></li>
				   
				</ul>

			</div>
			<!-- End tt-pagination -->

		</div> <!-- /.col (Content column) -->

	</div> <!-- /.row -->

</div> <!-- /.blog-list-inner -->


















					<!-- Begin split box (based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height)
					======================= -->
					<div class="split-box">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height bg-dark-4 text-white">

									<!-- Column (Split box image) 
									==============================
									* Use class "frame-left" or "frame-right" to enable split box image frame (Effect only on element boxed layout!).
									* Use class "sbi-shadow" to enable split box image shadow effect (Effect only on element boxed layout!).
									-->
									<div class="col-lg-push-6 col-lg-6 col-lg-height split-box-image no-padding bg-image lazy" data-src="{{ ('front/assets/img/misc/1.jpg') }}">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-90" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css') }}" file for more info. Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-70"></div>

									</div> <!-- /.col -->

									<!-- Column (use class "col-lg-top", "col-lg-middle" or "col-lg-bottom" to align content) -->
									<div class="col-lg-pull-6 col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content 
										=============================
										* Depends on which side the content is located use class "sb-content-left" or "sb-content-right".
										* Use class "sb-shifted-left" or "sb-shifted-right" to enable shifted content (not recommended for long content).
										* Use class "sb-content-color" to enable content box colored style.
										-->
										<div class="split-box-content sb-content-left">
											
											<!-- Begin info box wrap 
											========================= 
											* Use class "ib-style-2" to change info box style.
											* Use class "ib-boxed" enable info box boxed style.
											* Use class "ib-icon-color" to enable icon colored style (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-shape" to enable icon background shape (no effect with class: "ib-icon-bg-color").
											* Use class "ib-icon-bg-color" to enable icon background color style.
											* Use class "ib-icon-rounded" to enable icon rounded style (class "ib-icon-bg-color" is required!).
											* Use class "ib-light" if the background is dark.
											-->
											<div class="info-box-wrap ib-light ib-style-2">
												
												<div class="row">
													
													<div class="col-sm-6">
														
														<!-- Begin info box -->
														<div class="info-box" >
														
															<span class="info-box-icon"><span class="lnr lnr-screen"></span></span>
															
															<div class="info-box-info " >
															
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Design</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Aenean ac consectetur quam. Donec malesuada lacus nec ullamcorper pellentesque praesent ulis. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-cog"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Web Development</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Integer at condimentum orci, ut euismod ante. Class aptent taciti sociosqu ad litora torquent. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-camera-video"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Motion Graphics</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->

													<div class="col-sm-6">

														<!-- Begin info box -->
														<div class="info-box">
															<span class="info-box-icon"><span class="lnr lnr-leaf"></span></span>
															<div class="info-box-info">
																<h3 class="info-box-heading"><a href="home-landing-3.html">Illustrations</a></h3>
																<div class="info-box-text tt-ellipsis"> <!-- Use class "tt-ellipsis" to enable text element fixed height with ellipsis -->
																	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessit officia tempor. Proin pulvinar scelerisque lorem apti.
																</div>
															</div> <!-- /.info-box-info -->
														</div>
														<!-- End info box -->

													</div> <!-- /.col -->
												</div> <!-- /.row -->

											</div>
											<!-- End info box wrap -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.page-section-inner -->
			</section>
			<!-- End page section -->






            <div class="portfolio-list-inner isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
					
                <!-- Begin isotope
                ===================
                * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
                * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                -->
                <div class="isotope col-4 gutter-3">
                    
                    <!-- Begin isotope top content -->
                    <div class="isotope-top-content">

                        <!-- Begin isotope categories (if you don't want to use a isotope filter then you can use the category list instead to present portfolio categories on separate pages. Just uncomment if needed. Note: do not forget to remove isotope filter code!).
                        ================================= 
                        * Add class "active" to <li> if you need active link on current page.
                        * Use class "iso-cat-center" or "iso-cat-right" to align category list.
                        -->
                        <!-- <div class="isotope-categories-wrap">
                            <ul class="isotope-categories">
                                <li class="icl-title"><span>Categories: </span></li>
                                <li class="active"><a href="">Branding</a></li>
                                <li><a href="">Print</a></li>
                                <li><a href="">Digital</a></li>
                                <li><a href="">Motion</a></li>
                            </ul>
                        </div> -->
                        <!-- End isotope categories -->


                        <!-- Begin isotope filter
                        ==========================
                        * Use class "fi-btn" to enable filter button (default style).
                        * Use class "fi-center" or "fi-right" to align filter ("fi-center"= no effect on "fi-btn").
                        * Use class "fi-btn-dark" to enable filter button dark style (class "fi-btn" is required!).
                        * Use class "fi-btn-light" to enable filter button light style (class "fi-btn" is required!).
                        * Use class "fi-btn-tansparent-dark" to enable filter button transparent dark style (class "fi-btn" is required! No effect on smaller screens!).
                        * Use class "fi-btn-tansparent-light" to enable filter button transparent light style (class "fi-btn" is required! No effect on smaller screens!).
                        * Use class "fi-btn-dropdown-dark" to enable filter button dropdown dark style (class "fi-btn" is required!).
                        * Use class "fi-btn-dropdown-light" to enable filter button dropdown light style (class "fi-btn" is required!).
                        -->
                        <div class="isotope-filter fi-btn fi-right fi-btn-dropdown-dark">
                            <div class="isotope-filter-button">
                                <span class="ifb-icon"><span class="lnr lnr-funnel"></span></span>
                                <span class="ifb-icon-close"><i class="fas fa-times"></i></span> <!-- effect on small screens!) -->

                                <!-- Begin filter button text
                                ==============================
                                * Use class "hide-from-xs" to disable button text on small screens.
                                * Use class "hide" to disable button text permanently.
                                -->
                                <span class="ifb-text">Filter</span>
                                <!-- End filter button text -->

                            </div> <!-- /.isotope-filter-button -->

                            <!-- Begin isotope filter links -->
                            <ul class="isotope-filter-links">
                                <li class="ifl-title"><span>Filter: </span></li>
                                <li><button class="active" data-filter="*">Show All</button></li>
                                <li><button data-filter=".branding">Branding</button></li>
                                <li><button data-filter=".print">Print</button></li>
                                <li><button data-filter=".digital">Digital</button></li>
                                <li><button data-filter=".motion">Motion</button></li>
                            </ul>
                            <!-- End isotope filter links -->
                        </div>
                        <!-- End isotope filter -->

                    </div>
                    <!-- End isotope top content -->

                    <!-- Begin isotope items wrap 
                    ==============================
                    * Use class "pli-alter-1", "pli-alter-2", "pli-alter-3", "pli-alter-4" or "pli-alter-5" to change portfolio list item style. Note: style "pli-alter-4" is no effect on small screens (for better user experience)!
                    * Use class "pli-dark" to enable dark hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
                    * Use class "pli-colored" or "pli-multi-colored" to enable colored hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
                    * Use class "pli-frame" to enable image frames.
                    -->
                    <div style="position: relative; height: 888.683px;" class="isotope-items-wrap pli-dark pli-alter-4">

                        <!-- Grid sizer (do not remove!!!) -->
                        <div class="grid-sizer"></div>


                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 0px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-1.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-1.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-1.html">Elper Nomadis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 328.4px; top: 0px;" class="isotope-item print">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-2.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-16.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-2.html">Futter Samantis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 0px;" class="isotope-item branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-3.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-3.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-3.html">Tartumi Sandera Naomis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 0px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-4.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-4.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->
                                    
                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-4.html">Tetera Laktus</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 199.083px;" class="isotope-item motion">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-5.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-5.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-5.html">Tant Saktra Memis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Motion</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 199.083px;" class="isotope-item branding digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-6.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-17.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-6.html">Intuisa Jacobis Untra</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 217.55px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-7.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-19.gif') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-7.html">Marevik Trastis</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 416.633px;" class="isotope-item branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-8.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-20.gif') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-8.html">Kampur &amp; Brena</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 328.4px; top: 439.233px;" class="isotope-item print">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-9.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-18.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-9.html">Ekona Rufu Tatemi Antem</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 472.05px;" class="isotope-item digital">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-1.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-10.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-1.html">Kakteil Nurk Um Akso</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 638.316px;" class="isotope-item branding motion">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-2.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-11.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-2.html">Gravitek Fucena Ekrem</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Motion</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-3.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-12.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-3.html">Lehitsesa Linnas</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a>, <a href="portfolio-grid-no-crop.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-4.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-15.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-4.html">Watres Boletum</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                    </div>
                    <!-- End isotope items wrap -->


                    <!-- Begin tt-pagination 
                    ========================= 
                    * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
                    * Use class "tt-pagin-rounded" to enable pagination rounded style -->
                    <div class="tt-pagination-wrap tt-pagin-center">
                        <ul class="tt-pagination">
                           
                            <li class="active"><a href="portfolio-grid-no-crop.html#0">Barcha suratlarni ko'rish.</a></li>
                           
                        </ul>

                       
                    </div>
                    <!-- End tt-pagination -->

                    <!-- Begin isotope pagination (Note: "Load More" button is for design purposes only!)
                    ============================== -->
                    <!-- <div class="iso-load-more-wrap">
                        <div class="iso-load-more">
                            <button class="iso-load-more-button">Load More</button>
                        </div>
                    </div> -->
                    <!-- End isotope pagination -->
<hr>
                </div>
                <!-- End isotope -->

            </div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
        
            <section class="video-promo-section bg-image" style="background-image: url({{ ('front/assets/img/misc/Art-Paints.jpg') }});">

				<!-- Element cover 
				===================
				* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
				* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
				* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
				-->
				<div class="cover cover-opacity-5"></div>

				<div class="video-promo-inner tt-wrap">
					
					<!-- Begin video promo caption 
					=============================== -->
					<div class="video-promo-caption">

						<!-- Begin tt-heading 
						====================== 
						* Use class "text-center" or "text-right" to align tt-heading.
						* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
						-->
						<div class="tt-heading tt-heading-xlg text-center text-white">
							<div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
								
									
								<h1 class="tt-heading-title">Video Promo</h1>
								<div class="tt-heading-subtitle">Watch our video presentation</div>
								
								<!-- Begin zig-zag separator 
								============================= 
								* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
								* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
								-->
								<!-- <div class="zig-zag-separator">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div> -->
								<!-- End zig-zag separator -->

							</div> <!-- /.tt-heading-inner -->
						</div>
						<!-- End tt-heading -->
					
						<!-- Begin video promo button
						==============================
						* Use class "vpb-animated" to enable button animation.
						* Note: Just add your Youtube or Vimeo video link. 
						-->
						<div class="video-promo-btn-wrap vpb-animated lightgallery">
							<a href="https://vimeo.com/9176726" class="video-promo-btn lg-trigger">
								<span class="lnr lnr-camera-video"></span>
							</a>
						</div>
						<!-- End video promo button -->

					</div>
					<!-- End video promo caption -->

				</div> <!-- /.video-promo-inner -->
			</section>
            
            
         <!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed. 
			-->
			<section id="footer" class="no-margin-top">
				<div class="footer-inner">
					<div class="footer-container tt-wrap">
						<div class="row">
							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (logo) -->
								<div class="footer-block">
									<div class="f-block-logo">
										<!-- logo images for big screens -->
										<a href="index.html" class="logo-dark"><img src="{{ ('front/assets/img/logo-dark.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light"><img src="{{ ('front/assets/img/logo-light.png') }}" alt="logo"></a>

										<!-- logo images for smaller screens -->
										<a href="index.html" class="logo-dark-m"><img src="{{ ('front/assets/img/logo-dark-m.png') }}" alt="logo"></a>
										<a href="index.html" class="logo-light-m"><img src="{{ ('front/assets/img/logo-light-m.png') }}" alt="logo"></a>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (links) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Menu</h4>
									<ul class="f-block-links">
										<li><a href="about-us.html">About</a></li>
										<li><a href="portfolio-grid-1.html">Portfolio</a></li>
										<li><a href="blog-list-classic.html">Blog</a></li>
										<li><a href="page-faq-sidebar-right.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (social) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Follow</h4>
									<ul class="f-block-links">
										<li><a href="https://www.facebook.com/themetorium" target="_blank">Facebook</a></li>
										<li><a href="https://twitter.com/Themetorium" target="_blank">Twitter</a></li>
										<li><a href="https://plus.google.com/+SiiliOnu" target="_blank">Google+</a></li>
										<li><a href="https://www.behance.net/Themetorium" target="_blank">Behance</a></li>
										<li><a href="https://dribbble.com/Themetorium" target="_blank">Dribbble</a></li>
									</ul>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-4 col-md-2">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">Contact</h4>
									<div class="f-block-text">
										<p>121 King Street, Melbourne, Australia</p>
										<p>+123 456 789 000<br>
										<a href="mailto:info@youremail.com">info@youremail.com</a></p>
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->

							<div class="col-sm-12 col-md-3">

								<!-- Begin footer block (text) -->
								<div class="footer-block">
									<h4 class="f-block-heading">About</h4>
									<div class="f-block-text padding-right-30">
										Sed non auctor magna. Nunc eu ultrices orci. Donec commodo ligula in massa ultricies volutpat. Fusce vel cursus lectus.
									</div>
								</div>
								<!-- End footer block -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.footer-container -->

					<!-- Begin footer bottom -->
					<div class="footer-bottom">
						<div class="footer-container tt-wrap">
							<div class="row">
								<div class="col-md-6">

									<!-- Begin footer copyright -->
									<div class="footer-bottom-col-left">
										&copy; Aivo / All rights reserved
									</div>
									<!-- End footer copyright -->

								</div> <!-- /.col -->

								<div class="col-md-6">

									<div class="footer-bottom-col-right">
										Design by: <a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" target="_blank">Themetorium</a>
									</div>

								</div> <!-- /.col -->

							</div> <!-- /.row -->
						</div> <!-- /.footer-container -->
					</div>
					<!-- End footer bottom -->

				</div> <!-- /.footer-inner -->

				<!-- Scroll to top button -->
				<a href="home-full-screen-slideshow.html#body" class="scrolltotop sm-scroll" title="Scroll to top"></a>

			</section>
			<!-- End footer section -->

	
		<!-- End body content -->
        @endsection