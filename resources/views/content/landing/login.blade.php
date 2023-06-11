@extends('layout.landing.main')
@section('content')

	@if ($alert = Session::get('error'))
		<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 	<span aria-hidden="true">&times;</span>
			 </button>
			<h4 class="alert-heading">Mohon maaf</h4>
			<p class="mb-0">{{ $alert }}</a>.</p>
		</div>
	@endif
	@if ($alert = Session::get('success'))
		<div class="alert alert-success alert-dismissible fade show m-5" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 	<span aria-hidden="true">&times;</span>
			 </button>
			<h4 class="alert-heading">Selamat</h4>
			<p class="mb-0">{{ $alert }}</a>.</p>
		</div>
	@endif

	<div class="card m-5">
		<div class="card-header">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Masuk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Daftar</a>
				</li>
			</ul>			
		</div>
		<div class="tab-content card-body" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
				<form action="{{ route('dologin') }}">
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus  required>
						</div>
					</div>
					<div class="form-group row mt-2">
						<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 offset-md-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember">
								<label class="form-check-label" for="remember">
									Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
				<form action="{{ route('register') }}">
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Nama </strong>
									<input id="val_id_usr" type="text" name="id_usr" class="form-control" placeholder="id" hidden>
									<input id="val_username" type="text" name="username" class="form-control" placeholder="username" required>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Email </strong>
									<input id="val_email" type="email" name="email" class="form-control" placeholder="email" required>
								</div>
							</div>

							<div id="box_password" class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Password </strong>
									<input id="val_password" type="password" name="password" class="form-control" placeholder="password">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="btn_sv" type="submit" class="btn btn-primary">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection