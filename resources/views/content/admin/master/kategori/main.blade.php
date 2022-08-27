@extends('layout.admin.main')
@push('style')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datatables.min.css')}}">
<style type="text/css">
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
</style>
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
					<li class="breadcrumb-item"><a href="#">Home</a></li>
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
						<thead class="text-center">
							<th width="7%">No</th>
							<th>Kode</th>
							<th>Nama</th>
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
				{ data: 'DT_RowIndex',name: 'DT_RowIndex',render:function(data){
					return '<p class="text-center">'+data+'</p>'
				},orderable: false,searchable: false},
				{ data: 'kode_kategori',name: 'kode_kategori',render:function(data,type,row){
					return '<p class="text-center" style="margin:0;">'+data+'</p>'
				}},
				{ data: 'nama_kategori',name: 'nama_kategori',render:function(data){
					return '<p class="text-center">'+data+'</p>'
				}}
			]
		})
	})
	$(".btn-add").click(function(){
		$("#main-layer").hide()
		$.post("{{route('addKategori')}}").done(function(data){
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				console.log('gagal nih')
			}
		})
	})
</script>
@endpush