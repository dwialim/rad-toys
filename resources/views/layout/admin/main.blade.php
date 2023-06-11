<!DOCTYPE html>
<html lang="en">
	<head>
		@include('include.admin.style') {{-- import file css --}}
	</head>
	<body class="control-sidebar-slide-open layout-navbar-fixed layout-fixed">
		<div class="wrapper">
			{{-- import header --}}
			@include('include.admin.header')

			{{-- import sidebar --}}
			@include('include.admin.sidebar')

			<div class="content-wrapper">
				@yield('content')
			</div>

			{{-- import footer --}}
			@include('include.admin.footer')
		</div>
		@include('include.admin.script') {{-- import file JS --}}
	</body>
</html>