<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>圣义投资</title>

<!-- MAIN CSS FILES===================================
======================================================= -->
<!-- Bootstrap Core CSS -->
<link href={{ asset("assets/css/bootstrap.min.css") }} rel="stylesheet">
<!-- Animation -->
<link rel="stylesheet" href={{ asset("assets/css/animate.css") }}>
<!-- Custom CSS -->
<link href={{ asset("assets/css/theme.css") }} rel="stylesheet">
<!-- Responsive styles-->
<link rel="stylesheet" href={{ asset("assets/css/responsive.css") }}>
<!-- FontAwesome -->
<link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>
 <!-- icon moon -->
<link rel="stylesheet" href={{ asset("assets/css/icon-moon.css") }}>

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" >
	<div class="container">
		<div class="row ">
			<div class="col-md-12 ">
				<div class="main-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll" href="#page-top">
                            <img src="{{ asset('assets/images/logo.svg') }}" class="sy_logo"/>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse  navbar-main-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/"  >首页</a></li>
                            <li><a class="page-scroll" href="/news" >最新消息</a></li>
                            <li><a class="page-scroll" href="/products">产品业务</a></li>
                            <li><a class="page-scroll" href="/#section-contact-info"  >联系我们</a></li>
                            @auth
                            <li>
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" id="dropdownMenu1"
                                            data-toggle="dropdown">
                                        <span class="icon-user text-primaray"></span> {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <a role="menuitem" class="dmenu" tabindex="-1" href="/products"><span class="fa fa-diamond" aria-hidden="true"></span>  产品推荐</a>
                                        </li>
                                        <li>
                                            <a role="menuitem" class="dmenu" tabindex="-1" href="/cash"> <span class="fa fa-jpy" aria-hidden="true"></span> 出金入金</a>
                                        </li>
                                        <li>
                                            <a role="menuitem" class="dmenu" tabindex="-1" href="/income"><span class="fa fa-bar-chart" aria-hidden="true"></span> 收益流水</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a role="menuitem" class="dmenu" tabindex="-1" href="/me"><span class="fa fa-user" aria-hidden="true"></span> {{ Auth::user()->name }}</a>
                                            <a role="menuitem" class="dmenu" tabindex="-1" href="/logout"><span class="fa fa-power-off" aria-hidden="true"></span> 安全退出</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @else
							<li><a class="page-scroll" href="/me" > 用户中心</a></li>
                            @endauth
						</ul>
						<div class="contact-no navbar-right visible-md visible-lg">
							<i class="fa fa-phone"></i>&nbsp; 021-62568560
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<!-- navbar end -->

@yield('content')

<!-- section Footer start -->
<section id="section-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center wow fadeInDown">
				<div class="footer-desc">
					<h2 class="footer-logo">选择, 创造财富</h2>
					<p>圣义投资秉着“立足中国，放眼全球”通过不懈的努力，实现为客户进行全球多元化的多品种资产配置，其中包括资产管理，外汇，期货，大宗商品，股票，黄金，信托，基金等一系列资产配置.</p>

					<h6 class="copy">版权所有 &copy; 2020.上海圣义投资有限公司</h6>
				</div>
			</div>
		</div> <!-- row end -->
	</div> <!-- container end -->
</section>
<!-- section Footer end -->

<!-- jQuery -->
<script src={{ asset("assets/js/jquery.js") }}></script>
<!-- Bootstrap Core JavaScript -->
<script src={{ asset("assets/js/bootstrap.min.js") }}></script>
<!-- form validation -->
<script type="text/javascript" src={{ asset("assets/js/validator.min.js") }}></script>
<script type="text/javascript" src={{ asset("assets/js/form-scripts.js") }}></script>
<!-- Plugin JavaScript -->
<script src={{ asset("assets/js/jquery.easing.min.js") }}></script>
<!-- Wow Animation -->
<script type="text/javascript" src={{ asset("assets/js/wow.min.js") }}></script>
<!-- html5 shiv -->
<script type="text/javascript" src={{ asset("assets/js/html5shiv.js") }}></script>
<!-- respond js -->
<script type="text/javascript" src={{ asset("assets/js/respond.js") }}></script>
<!-- Custom Theme JavaScript -->
<script src={{ asset("assets/js/theme.js") }}></script>

</body>
</html>
