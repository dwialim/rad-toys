@php
	$segment1 = request()->segment(1);
	$segment2 = request()->segment(2);
@endphp

<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="index.html">
			<span class="align-middle">Rad Toys Rental</span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-item {{($segment1=='dashboard'?'active':'')}}">
				<a class="sidebar-link" href="{{route('dashboard')}}">
					<i class="align-middle" data-feather="home"></i><span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item {{($segment1=='master'?'active':'')}}">
				<a href="#" class="accordion-button sidebar-link" data-bs-toggle="collapse" data-bs-target="#master" aria-expanded="false" aria-controls="master">
					<i class="align-middle" data-feather="book"></i><span class="align-middle">Master Data</span>
				</a>
			</li>
			<ul class="submenu collapse {{($segment1=='master'?'show':'')}}" id="master">
				<li class="sidebar-item {{$segment2=='produk'?'active':''}}">
					<a href="{{route('produk')}}" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Produk</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="javascript:void(0)" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Master 2</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="javascript:void(0)" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Master 3</span>
					</a>
				</li>
			</ul>
		</ul>
	</div>
</nav>