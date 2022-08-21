<style type="text/css">
	.sub-menu{
		margin-left: 1.575rem;
	}
</style>
@php
	$segment1 = request()->segment(1);
	$segment2 = request()->segment(2);
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="javascript:void(0)" class="brand-link">
		<img src="{{asset('assets/admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="{{route('dashboard')}}" class="nav-link {{($segment1=='dashboard')?'active':''}}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item {{($segment1=='master')?'menu-open':''}}">
					<a href="#" class="nav-link {{($segment1=='master')?'active':''}}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Data Master<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link {{($segment1=='kategori')?'active':''}}">
								<div class="sub-menu">
									<i class="fas fa-database nav-icon"></i><p>Kategori</p>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('produk')}}" class="nav-link {{($segment2=='produk')?'active':''}}">
								<div class="sub-menu">
									<i class="fas fa-dolly-flatbed nav-icon"></i><p>Produk</p>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link {{($segment1=='profile')?'active':''}}">
								<div class="sub-menu">
									<i class="far fa-address-book nav-icon"></i><p>Profile</p>
								</div>
							</a>
						</li>

						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link">
								<div class="sub-menu">
									<i class="far fa-user nav-icon"></i><p>User</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

{{-- <nav id="sidebar" class="sidebar js-sidebar">
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
				<li class="sidebar-item">
					<a href="javascript:void(0)" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Kategori Produk</span>
					</a>
				</li>
				<li class="sidebar-item {{$segment2=='produk'?'active':''}}">
					<a href="{{route('produk')}}" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Produk</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="javascript:void(0)" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">Profile</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="javascript:void(0)" class="sidebar-link links">
						<i class="align-middle" data-feather="minus"></i><span class="align-middle">User</span>
					</a>
				</li>
			</ul>
		</ul>
	</div>
</nav> --}}