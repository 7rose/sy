@extends('nav')

@section('content')

<!-- section contact start -->
<div class="top-pad">
</div>
<!-- section contact end -->

<!-- section service start -->
<section id="section-service">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeIn">
				<div class="section-heading text-center">
					<h2>产品中心</h2>
					<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio. Phasellus dolor enim, faucibus egestas scelerisque.</p>
				</div>
			</div>
		</div> <!-- row end -->

		<div class="row">
			<div class="col-md-3 col-sm-4 wow fadeInLeft">
				 <ul class="nav nav-tabs nav-stacked" role="tablist" id="service-tab-wrapper">
					<li role="presentation" class="active">
						<a href="#tab_a" class="animated fadeIn"  role="tab" data-toggle="tab">Neurology</a>
					</li>
					<li role="presentation">
						<a href="#tab_b" class="animated fadeIn" role="tab" data-toggle="tab">Dental Care</a>
					</li>
					<li role="presentation">
						<a href="#tab_c" class="animated fadeIn" role="tab" data-toggle="tab">Cardiology</a>
					</li>
					<li role="presentation">
						<a href="#tab_d" class="animated fadeIn"  role="tab" data-toggle="tab">Eye Care</a>
					</li>
					<li role="presentation">
						<a href="#tab_e" class="animated fadeIn"  role="tab" data-toggle="tab">Kidney sergery</a>
					</li>
					<li role="presentation">
						<a href="#tab_f" class="animated fadeIn"  role="tab" data-toggle="tab"> Heart care</a>
					</li>
				  </ul>
			</div> <!-- col end -->
			<div class="col-md-9 col-sm-8 wow fadeInRight">
				<div class="tab-content" id="service-tab-content">
					<div role="tabpanel" class="tab-pane active animated fadeIn" id="tab_a">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about1.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>Neurology</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- tabpanel end -->

					 <div role="tabpanel" class="tab-pane animated fadeIn" id="tab_b">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about2.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>Dental care</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- tabpanel end -->

					 <div role="tabpanel" class="tab-pane animated fadeIn" id="tab_c">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about3.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>Cardology</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- tabpanel end -->

					 <div role="tabpanel" class="tab-pane animated fadeIn" id="tab_d">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about4.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>eye care</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- tabpanel end -->

					 <div role="tabpanel" class="tab-pane animated fadeIn" id="tab_e">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about5.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>Kidney sergery</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- tabpanel end -->

					 <div role="tabpanel" class="tab-pane animated fadeIn" id="tab_f">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="service-img">
									<img src={{ asset("assets/images/about/about6.jpg") }} alt="feature-img3">
								</div>
							</div>

							<div class="col-md-7 col-sm-12">
								<div class="service-desc">
									<h4>Heart care</h4>
									<p>Pellentesque turpis felis, dignissim sit amet sagittis ac, elemen augue. Aliquam vitae enim risus, at laoreet metus.elemen siquam elementum quisaugue.</p>
									<ul class="service-tab-info">
										<li>Qualified Staff of Doctors</li>
										<li>Save your Money and Time</li>
										<li>24x7 Emergency Services</li>
										<li>Easy &amp; Affordable Billing</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- col end -->
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section service end -->
@endsection
