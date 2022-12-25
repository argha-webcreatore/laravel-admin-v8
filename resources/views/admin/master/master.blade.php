
<!doctype html>
<html lang="en" dir="ltr">

<head>
	@include('admin.master.header-asset')
</head>

<body class="ltr app sidebar-mini">

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="{{asset('admin/images/loader.svg')}}" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">
		<div class="page-main">

			<!-- app-Header -->
            @include('admin.master.top-navigation')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('admin.master.sidebar')
			<!--/APP-SIDEBAR-->

			<!--app-content open-->
			<div class="app-content main-content mt-0">
				<div class="side-app">
					 <!-- CONTAINER -->
					 @yield('main-content')
					
				</div>
			</div>
			<!-- CONTAINER END -->
		</div>




		<!-- FOOTER -->
		@include('admin.master.footer')
		<!-- FOOTER END -->
	</div>

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

	@include('admin.master.footer-asset')

</body>

</html>