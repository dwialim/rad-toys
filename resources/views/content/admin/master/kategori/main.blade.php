@extends('layout.admin.main')
@push('style')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datatables.min.css')}}">
<style type="text/css">
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
	.swal2-styled.swal2-default-outline:focus {
		box-shadow: none !important; 
	}
</style>
@endpush

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Kategori</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Kategori</li>
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
					<button class=" btn btn-primary btn-add" type="button">
						<i class="align-middle feather-19" data-feather="plus"></i> Tambah Kategori
					</button>
				</div>
				<div class="card-body">
					<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
						<thead class="text-center">
							<tr>
								<th width="7%">No</th>
								<th>Kode</th>
								<th>Nama</th>
								<th>Aksi</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<div id="other-page"></div>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript" src="{{asset('assets/admin/js/datatables.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#dataTable').DataTable({
			scrollX: true,
			serverSide: true,
			processing: true,
			ajax: {
				url: '{{route("getKategori")}}',
				type: 'POST',
			},
			columns: [
				{data: 'DT_RowIndex',name: 'DT_RowIndex',render:function(data){
					return '<p class="text-center" style="margin:0;">'+data+'</p>'
				},orderable: false,searchable: false},
				{data: 'kode_kategori',name: 'kode_kategori',render:function(data,type,row){
					return '<p class="text-center" style="margin:0;">'+data+'</p>'
				}},
				{data: 'nama_kategori',name: 'nama_kategori',render:function(data){
					return '<p class="text-center" style="margin:0;">'+data+'</p>'
				}},
				{data: 'action', name: 'action'}
			]
		})
	})

	$(".btn-add").click(function(){
		$("#main-layer").hide()
		$.post("{{route('formKategori')}}").done(function(data){
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$('#other-page').empty()
				$('#main-layer').show()
			}
		})
	})

	function updated(id){
		$('#main-layer').hide()
		$.post("{{route('formKategori')}}",{id:id}).done((data)=>{
			if(data.status=="success"){
				$('#other-page').html(data.data).fadeIn()
			}else{
				$('#other-page').empty()
				$('#main-layer').show()
			}
		})
	}

	function deleted(id){
		Swal.fire({
			title: 'Anda Yakin?',
			text: 'Data Akan Dihapus Dari Sistem!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#rgb(155 155 155)',
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: "Batal",
			reverseButtons: true
		}).then((result)=>{
			if(result.isConfirmed){
				$.post("{{route('destroyKategori')}}",{id:id}).done((data)=>{
					if(data.status=='success'){
						Swal.fire({
							icon: data.status,
							title: 'Berhail',
							text: data.message,
							timer: 1300,
							showConfirmButton: false,
						})
						$('#dataTable').DataTable().ajax.reload();
					}else{
						Swal.fire({
							icon: data.status,
							title: 'Gagal',
							text: data.message,
							timer: 1300,
							showConfirmButton: false,
						})
					}
				})
			}
		})
	}
</script>
@endpush