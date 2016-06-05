<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}">

	<script src="{{url('ckeditor/ckeditor.js')}}"></script>
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CMS</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check())
						<li class="{{ isActiveRoute('') }}"> 
							{!! Html::link(action('Admin\AdminController@index'), trans('adminpanel.homePage')) !!}
						</li>
						<li class="{{ areActiveRoutes(['admin.articles.index', 'admin.artcles.create']) }}">
							{!! Html::link(action('Admin\ArticleController@index'), trans('adminpanel.articles')) !!}
						</li>
						<li class="{{ areActiveRoutes(['admin.banners.index', 'admin.banners.create', 'admin.banners.edit']) }}">
							{!! Html::link(action('Admin\BannerController@index'), trans('adminpanel.banners')) !!}
						</li>
						<li class="{{ areActiveRoutes(['admin.pages.index', 'admin.pages.create', 'admin.pages.edit']) }}">
							{!! Html::link(action('Admin\PageController@index'), trans('adminpanel.pages')) !!}
						</li>
						<li class="{{ areActiveRoutes(['admin.teachers.index', 'admin.teachers.create', 'admin.teachers.edit']) }}">
							{!! Html::link(action('Admin\TeacherController@index'), trans('adminpanel.teachers')) !!}
						</li>
						<li class="{{ areActiveRoutes(['admin.galleries.index', 'admin.galleries.create', 'admin.galleries.edit', 'admin.galleries.show']) }}">
							{!! Html::link(action('Admin\GalleryController@index'), trans('adminpanel.galleries')) !!}
						</li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li>{!! Html::link('/auth/login', 'Login') !!}</li>
						<li>{!! Html::link('/auth/register', 'Register') !!}</li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>{!! Html::link('/auth/logout', 'Logout') !!}</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>


	@yield('content')
				

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{url('node_modules/lity/dist/lity.js')}}"></script>

	<script>
		$('.alert').delay(5000).slideUp(300);
	</script>

	@yield('footer')
</body>
</html>
