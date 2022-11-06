@extends('layout.admin.main')
@push('style')
<style type="text/css">
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
	.swal2-styled.swal2-default-outline:focus {
		box-shadow: none !important; 
	}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/zoom/css/jquery.pan.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datatables.min.css')}}">
{{-- <link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}

{{-- <link rel="stylesheet" href="{{asset('assets/user/bootstrap.min.css')}}"> --}}
@endpush
@section('content')

	@if ($alert = Session::get('success'))
		<div class="alert alert-success alert-dismissible fade show m-5" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 	<span aria-hidden="true">&times;</span>
			 </button>
			<p class="mb-0">{{ $alert }}</a>.</p>
		</div>
	@endif

	<div class="modal shw" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">User</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="" onclick="return false">Home</a></li>
						<li class="breadcrumb-item active">Produk</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container-fluid">
			<div id="main-layer">
				<div class="card">

					<div class="card-header text-right">
						<button id="add_usr" type="button" class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#modal_usr">
						  Tambah user
						</button>
					</div>
					<!-- Button trigger modal -->

					<div class="card-body">
						<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
							<thead class="text-center" style="width:100%;">
								<tr>
									<th width="7%"> No</th>
									<th> ID</th>
									<th> Nama</th>
									<th> Email</th>
									<th> Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="modal_usr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form id="frm" method="">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
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
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button id="btn_sv" type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="modal fade" id="modal_dlt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<form action="#" method="get" accept-charset="utf-8">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<a id="dlt" href="" type="button" class="btn btn-primary">YA</a>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div id="other-page"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push("script")
{{-- zoom image --}}
<script src="{{asset('assets/user/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/user/popper.min.js')}}"></script>
<script src="{{asset('assets/user/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/zoom/js/jquery.pan.js')}}"></script>
<script src="{{asset('assets/admin/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#dataTable').DataTable({
			scrollX: true,
			serverSide: true,
			processing: true,
			ajax: {
				url: "{{route('getuser')}}",
				type: "POST",
			},
			columns: [
				{data:'DT_RowIndex', name:"DT_RowIndex", render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"id", name:"id"},
				{data:"name", name:"name"},
				{data:"email", name:"email"},
				{data:"action", name:"action"}
			]
		})
	})

	function deleted(id){
		Swal.fire({
			title: "Anda Yakin?",
			text: "Data Akan Dihapus Dari Sistem!",
			icon: "warning",
			showCancelButton: true,
			reverseButtons: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#rgb(155 155 155)',
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: "Batal"
		}).then((result)=>{
			if(result.isConfirmed){
				$.post("{{route('dlt_user')}}",{id:id}).done((data)=>{
					if(data.status=='success'){
						Swal.fire({
							icon: data.status,
							title: 'Berhail',
							text: data.message,
							timer: 1300,
							showConfirmButton: false,
						})
						$('#dataTable').DataTable().ajax.reload()
					}else{
						Swal.fire({
							icon: data.status,
							title: 'Gagal',
							text: data.message,
							showConfirmButton: true,
						})
					}
				})
			}
		})
	}

	$(document).ready(function() {
		$(document).on('click', '#add_usr', function() {
			$('#frm').attr('action', '{{ route('sv_user') }}')
			$('#val_username').val('').prop('disabled', false);
			$('#val_email').val('').prop('disabled', false);
			$('#box_password').css('visibility', 'visible');
			$('#val_password').val('').prop('disabled', false).attr('required', true);
			$('#btn_sv').css('visibility', 'visible');
		});
	});

	$(document).ready(function() {
		$(document).on('click', '#edt_usr', function() {
			var id = $(this).data('id_usr');
			var username = $(this).data('username');
			var email = $(this).data('email');
			var password = $(this).data('password');
			$('#frm').attr('action', '{{ route('edt_user') }}');
			$('#val_id_usr').val(id);
			$('#val_username').val(username).prop('disabled', false);
			$('#val_email').val(email).prop('disabled', false);
			$('#box_password').css('visibility', 'visible');
			$('#val_password').val('').prop('disabled', false).attr('required', false);
			$('#btn_sv').css('visibility', 'visible');
		})
	});

	$(document).ready(function() {
		$(document).on('click', '#shw_usr', function() {
			var id = $(this).data('id_usr');
			var username = $(this).data('username');
			var email = $(this).data('email');
			$('#val_username').val(username).prop('disabled', true);
			$('#val_email').val(email).prop('disabled', true);
			$('#box_password').css('visibility', 'hidden');
			$('#btn_sv').css('visibility', 'hidden');
		});
	});
</script>
@endpush
