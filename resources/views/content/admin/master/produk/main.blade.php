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
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush
@section('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Produk</h1>
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
						<button class=" btn btn-primary btn-add" type="button">
							<i class="align-middle feather-19" data-feather="plus"></i> Tambah Produk
						</button>
					</div>
					<div class="card-body">
						<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
							<thead class="text-center" style="width:100%;">
								<tr>
									<th width="7%"> No</th>
									<th> Kode Produk</th>
									<th> Nama Produk</th>
									<th> Action</th>
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
@push("script")
{{-- zoom image --}}
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
				url: "{{route('getProduk')}}",
				type: "POST",
			},
			columns: [
				{data:'DT_RowIndex', name:"DT_RowIndex", render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"kode", name:"kode"},
				{data:"nama", name:"nama"},
				{data:"action", name:"action"}
			]
		})
	})

	$(".btn-add").click(function(){
		$("#main-layer").hide()
		$.post("{{route('formProduk')}}").done(function(data){
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$("#other-page").empty()
				$("#main-layer").show()
			}
		})
	})

	function updated(id){
		$("#main-layer").hide()
		$.post("{{route('formProduk')}}",{id:id}).done((data)=>{
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$("#other-page").empty()
				$("#main-layer").show()
			}
		})
	}

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
				$.post("{{route('destroyProduk')}}",{id:id}).done((data)=>{
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
</script>
@endpush