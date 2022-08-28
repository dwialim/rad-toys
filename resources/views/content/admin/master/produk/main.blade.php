@extends('layout.admin.main')
@push('style')
<style type="text/css">
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
</style>
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
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
								<th width="7%"> No</th>
								<th> Kode Produk</th>
								<th> Nama Produk</th>
								<th> QTY</th>
								<th> Harga Produk</th>
								<th> Action</th>
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
				{data:"kode_barang", name:"kode_barang", render:function(data,type,row){
					return  "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"nama_barang", name:"nama_barang", render:function(data,type,row){
					return  "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
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
		$.post("{{route('addProduk')}}").done(function(data){
			if(data.status=="success"){
				// $(".other-page").html(data)
				$("#other-page").html(data.data).fadeIn()
			}else{
				console.log('gagal nih')
			}
		})
	})

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