<!DOCTYPE html>
<html lang="en">
	<head>
		@include('include.style') {{-- import file css --}}
	</head>
	<body>
		<div class="wrapper">
			@include('include.sidebar') {{-- import sidebar --}}

			<div class="main">
				@include('include.header') {{-- import header --}}

				<main class="content">
					@yield('content')
				</main>

				@include('include.footer') {{-- import footer --}}
			</div>
		</div>
		@include('include.script') {{-- import file JS --}}
	</body>
</html>