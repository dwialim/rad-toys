<!DOCTYPE html>
<html lang="en">

<head>
	@include('include.landing.style') {{-- import file css --}}
</head>
<body>

	<div class="content-wrapper">
		@yield('content')
	</div>	
	
	@include('include.landing.script') {{-- import file script --}}
</body>
</html>