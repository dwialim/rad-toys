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
					<h1 class="m-0">Stok Produk</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="" onclick="return false">Home</a></li>
						<li class="breadcrumb-item active">Stok Produk</li>
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
							<i class="align-middle feather-19" data-feather="plus"></i> Tambah Stok
						</button>
					</div>
					<div class="card-body">
						<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
							<thead class="text-center">
								<tr>
									<th width="7%"> No</th>
									<th> Kode Stok</th>
									<th> Nama Produk</th>
									<th> Kategori</th>
									<th> QTY</th>
									<th> Harga Produk</th>
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
				url: "{{route('getStokProduk')}}",
				type: "POST",
			},
			columns: [
				{data:'DT_RowIndex', name:"DT_RowIndex", render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"kode", name:"kode"},
				{data:"nama", name:"nama"},
				{data:"kategori", name:"kategori"},
				{data:"qty", name:"qty", render:function(data,type,row){
					return  "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"harga", name:"harga",render:function(data,type,row){
					var data = formatRupiah(data,"Rp. ")
					return  `
						<div class='row'>
							<div class='col-sm-12'>
								<div class='row'>
								<div class='col-sm-3'>
								</div>
								<p class='col-sm-9' style='margin:0;'>${data}</p>
							</div>
						</div>
					`
				}},
				{data:"action", name:"action"}
			]
		})
	})

	$(".btn-add").click(function(){
		$("#main-layer").hide()
		$.post("{{route('formStokProduk')}}").done(function(data){
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$("#other-page").empty()
				$("#main-layer").show()
			}
		})
	})

	function detail(id){
		$('#main-layer').hide()
		$.post("{{route('detailStokProduk')}}",{id:id}).done((data)=>{
			if(data.status=='success'){
				$('#other-page').html(data.data).fadeIn()
			}else{
				$('#other-page').empty()
				$('#main-layer').show()
			}
		})
	}

	function updated(id){
		$("#main-layer").hide()
		$.post("{{route('formStokProduk')}}",{id:id}).done((data)=>{
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
			cancelButtonText: "Batal."
		})
	}

	function formatRupiah(angka, prefix) {
		// var number_string = angka.replace(/[^,\d]/g, "").toString()
		var number_string = angka.toString().replace(/[^,\d]/g, "")
		split = number_string.split(",")
		sisa = split[0].length % 3
		rupiah = split[0].substr(0, sisa)
		ribuan = split[0].substr(sisa).match(/\d{3}/gi)

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? "." : ""
			rupiah += separator + ribuan.join(".")
		}

		rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah
		return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : ""
	}
</script>
@endpush