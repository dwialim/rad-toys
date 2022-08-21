<!DOCTYPE html>
<html lang="en">
	<head>
		@include('include.style') {{-- import file css --}}
	</head>
	<body class="control-sidebar-slide-open layout-navbar-fixed layout-fixed">
		<div class="wrapper">
			{{-- import header --}}
			@include('include.header')

			{{-- import sidebar --}}
			@include('include.sidebar')

			<div class="content-wrapper">
				@yield('content')
			</div>

			{{-- import footer --}}
			@include('include.footer')
		</div>
		@include('include.script') {{-- import file JS --}}
	</body>
</html>