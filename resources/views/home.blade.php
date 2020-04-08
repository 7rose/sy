@extends('nav')

@section('content')

<!-- section slider start -->
<div id="section-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="carousel slide" id="slider-carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="slider-caption ">
								<h2 class="big-title wow slideInLeft">选择, 创造财富</h2>
								<p class="wow slideInRight">圣义投资以客户为中心. 现精选多款优秀的金融产品让您远离喧嚣, 谈笑间收益之果已成! 选择圣义, 选择财富.</p>
								<a href="/products" class="btn btn-primary white">详情</a>
							</div>
						</div> <!-- item end -->
						<div class="item ">
							<div class="slider-caption ">
								<h2 class="big-title wow slideInLeft">稳.准.很</h2>
								<p class="wow slideInRight">圣义投资团队成员经验丰富,具备极高的专业水准,且稳重果断,欢迎您的垂询,期待为您提供满意的服务.</p>
								<a href="/products" class="btn btn-primary white">详情</a>
							</div>
						</div> <!-- item end -->
					</div>
					<!-- Controls -->
					  <a class="left carousel-control" href="#slider-carousel" role="button" data-slide="prev">
						<i class="fa  fa-long-arrow-left " aria-hidden="true"></i>
						<span class="sr-only">上页</span>
					  </a>
					  <a class="right carousel-control" href="#slider-carousel" role="button" data-slide="next">
						<i class="fa  fa-long-arrow-right " aria-hidden="true"></i>
						<span class="sr-only">下页</span>
					  </a>
				</div> <!-- carousel slider wrapper -->
			</div>
		</div><!-- row end -->
	</div> <!-- container end -->
</div>
<!-- section slider end -->

<!-- section about us start -->
<section id="section-about">
	<div class="container">
		<div class="about-wrapper">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow slideInLeft">
					<div class="about-inner">
						<h4> <i class="icon-bullhorn"></i>  收益最高的产品 </h4>
						<p>Voluptates veniam, iure reprehenderit, quas eveniet rem recusandae dolores.</p>
					</div>
				</div> <!-- col end -->
				<div class="col-md-4 col-sm-4 wow slideInRight">
					<div class="about-inner">
						<h4> <i class="icon-clock"></i> 24/7 hours 客户服务 </h4>
						<p>Voluptates veniam, iure reprehenderit, quas eveniet rem recusandae dolores.</p>
					</div>
				</div> <!-- col end -->

				<div class="col-md-4 col-sm-4 wow slideInDown">
					<div class="top-contact">
                        <h4><i class="icon-key"></i> 用户中心</h4>
                        @auth
                        <p>尊敬的贵宾 {{ Auth::user()->name }}, 欢迎您使用圣义产品管理系统, 我们将竭诚为您提供更优质的服务!</p>
                        <a class="btn btn-primary white" href="/products">新品推荐</a>
                        <a class="btn btn-primary white" href="/me">用户中心</a>
                        @else
                        <p>为了维护您的专有利益,我们并没有在平台公开产品信息. 如果您已经是圣义尊贵的客户,请登录客户系统以获取更多信息和优惠! 如果您还没有加入圣义,请联系我们,谢谢!</p>
                        <a class="btn btn-primary white btn-block" href="/login">登录系统</a>
                        @endauth

					</div>
				</div>
			</div>
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section about us end -->

<!-- section feature start -->
<section id="section-feature">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow slideInDown">
				<div class="section-heading text-center">
					<h2>为什么选择圣义</h2>
					<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio. Phasellus dolor enim, faucibus egestas scelerisque.</p>
				</div>
			</div>
		</div> <!-- row end -->
		<div class="row">
			<div class="col-md-7 ">
				<div class="feature-inner">
					<div class="row">
						<div class="col-md-6 col-sm-6 wow slideInDown" data-wow-delay=".2s">
							<div class="feature-box">
								<i class="icon-trophy"></i>
								<h4>屡获殊荣</h4>
								<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
							</div>
						</div> <!-- col-end  -->
						<div class="col-md-6 col-sm-6  wow slideInDown" data-wow-delay=".4s">
							<div class="feature-box">
								<i class="icon-aid-kit"></i>
								<h4>专业的团队</h4>
								<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
							</div>
						</div> <!-- col-end  -->
						<div class="col-md-6 col-sm-6  wow slideInDown" data-wow-delay=".6s">
							<div class="feature-box">
								<i class="icon-road"></i>
								<h4>强大的合作支持</h4>
								<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
							</div>
						</div> <!-- col-end  -->
						<div class="col-md-6 col-sm-6  wow slideInDown" data-wow-delay=".8s">
							<div class="feature-box">
								<i class="icon-lab"></i>
								<h4>罕见的高收益产品</h4>
								<p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
							</div>
						</div> <!-- col-end  -->
					</div>
				</div>
			</div> <!-- col end -->
			<div class="col-md-5 feature-slide col-sm-12 visible-md visible-lg wow slideInRight">
				<div class="carousel slide" id="feature-slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src={{ asset("assets/images/about/about1.jpg") }} alt="feature-img1">
						</div> <!-- item end -->
						<div class="item">
							<img src={{ asset("assets/images/about/about2.jpg") }} alt="feature-img2">
						</div> <!-- item end -->
						<div class="item">
							<img src={{ asset("assets/images/about/about1.jpg") }} alt="feature-img3">
						</div> <!-- item end -->
					</div>
				</div>
			</div> <!-- col end -->
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section feature end -->

<!-- section service start -->
<section id="section-service">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeIn">
				<div class="section-heading text-center">
					<h2>圣义超高收益的服务</h2>
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

<!-- our team start -->
<section id="section-team" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow slideInLeft">
				<div class="section-heading text-left">
					<h2 class="sub-sec-title">听听客户们怎么说?</h2>
					<div class="line"></div>
				</div>
				<!-- Controls -->
					<div class="team-control">
					  <a class="left carousel-control" href="#team-carousel" role="button" data-slide="prev">
						<i class="fa  fa-long-arrow-left " aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#team-carousel" role="button" data-slide="next">
						<i class="fa  fa-long-arrow-right " aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					  </a>
				</div>
			</div>
		</div> <!-- row end -->
			<div class="row">
				<div class="carousel slide " id="team-carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a1.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a2.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".4s" >
								<div class="team-box">
									<img src={{ asset("assets/images/team/a3.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a4.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
						</div> <!-- item end -->

						<div class="item ">
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a1.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a2.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a3.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a4.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
						</div> <!-- item end -->

						<div class="item ">
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a1.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a2.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a3.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
								<div class="team-box">
									<img src={{ asset("assets/images/team/a4.jpg") }} alt="">
									<div class="team-desc">
										<h4>nuton serton</h4>
										<p>cardiolgy specialist</p>
										<a href="#"><i class="fa fa-phone"></i> +453-24354546</a>
									</div>
								</div>
							</div>
						</div> <!-- item end -->
					</div>
				</div>	<!-- carousle slide -->
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- our team end -->

<!-- section textimonial start -->
<section id="section-quote">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="quote-desc text-center">
					<h2 class="wow fadeInDown">如何联系我们</h2>
					<p class="wow slideInLeft">Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie consequat, vel illum dolore eufe ugiat nulla facilisis at vero.</p>
				</div>
			</div>

			<div class="col-md-12 text-center wow fadeInUp">
				<a href="#" class="btn btn-primary feature">我是VIP, 现在登录系统</a>
			</div>
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section textimonial end -->

<!-- section contact start -->
<section id="section-contact-info">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 wow slideInLeft" data-wow-delay="0s">
				<div class="info-box">
					<i class="icon-location"></i>
					<h4>地址</h4>
					<p>上海市静安区南京西路580号</p>
				</div>
			</div> <!-- col end -->
			<div class="col-md-3 col-sm-3  wow slideInLeft" data-wow-delay=".2s">
				<div class="info-box">
					<i class="icon-mobile"></i>
					<h4>热线</h4>
					<p>021-62568560</p>
				</div>
			</div> <!-- col end -->
			<div class="col-md-3 col-sm-3  wow slideInLeft" data-wow-delay=".4s">
				<div class="info-box">
					<i class="icon-address-book"></i>
					<h4>邮件</h4>
					<p>content@shengyiinvest.com</p>
				</div>
			</div> <!-- col end -->
			<div class="col-md-3 col-sm-3  wow slideInLeft" data-wow-delay=".6s">
				<div class="info-box">
					<i class="icon-bookmark"></i>
					<h4>官网</h4>
					<p>shengyiinvest.com</p>
				</div>
			</div> <!-- col end -->
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section contact end -->

@endsection
