<style type="text/css">
	.sub-menu{
		margin-left: 1.575rem;
	}
</style>
@php
	$segment = request()->segment(1);
	$segment1 = request()->segment(2);
	$segment2 = request()->segment(3);
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="javascript:void(0)" class="brand-link">
		<img src="{{asset('assets/admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Rad Toys</span>
	</a>

	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{route('dashboard')}}" onclick="{{($segment1=='dashboard')?'return false':''}}" class="nav-link {{($segment1=='dashboard')?'active':''}}">
						<i class="nav-icon fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item {{($segment1=='master')?'menu-open':''}}">
					<a href="#" class="nav-link {{($segment1=='master')?'active':''}}">
						<i class="nav-icon fas fa-database"></i>
						<p>Data Master<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{route('kategori')}}" class="nav-link {{($segment2=='kategori')?'active':''}}" onclick="{{($segment2=='kategori')?'return false':''}}">
								<div class="sub-menu"><i class="fas fa-list-alt nav-icon"></i><p>Kategori</p></div>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('produk')}}" class="nav-link {{($segment2=='produk')?'active':''}}" onclick="{{($segment2=='produk')?'return false':''}}">
								<div class="sub-menu"><i class="fas fa-dolly-flatbed nav-icon"></i><p>Produk</p></div>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('profile')}}" class="nav-link {{($segment2=='profile')?'active':''}}"  onclick="{{($segment2=='profile')?'return false':''}}" >
								<div class="sub-menu"><i class="far fa-address-book nav-icon"></i><p>Profile</p></div>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{route('user')}}" class="nav-link {{($segment2=='user')?'active':''}}" onclick="{{($segment2=='user')?'return false':''}}">
								<div class="sub-menu"><i class="far fa-user nav-icon"></i><p>User</p></div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{route('stokProduk')}}" onclick="{{($segment1=='stok-produk')?'return false':''}}" class="nav-link {{($segment1=='stok-produk')?'active':''}}">
						<i class="nav-icon fas fa-box-open"></i>
						<p>Stok Produk</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>