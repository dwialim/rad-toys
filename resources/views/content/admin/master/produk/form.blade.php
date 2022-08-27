<style type="text/css">
	.select2-container--bootstrap4.select2-container--focus .select2-selection{
		border-color: #ced4da !important;
		-webkit-box-shadow: unset !important;
	}
</style>
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">Form Tambah Produk</h3>
	</div>
	<form id="form-save">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row mb-3">
						<label for="kodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="kodeBarang" disabled readonly>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="namaBarang" placeholder="nama barang">
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="kategoriBarang" class="col-sm-2 col-form-label">Kategori Barang<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<select class="form-control" id="kategoriBarang">
								<option value="first" selected disabled>--Pilih Kategori--</option>
								@if(!empty($kategori))
								@foreach($kategori as $key => $val)
									<option value="{{$val->id}}">{{$val->nama_kategori}}</option>
								@endforeach
								@endif
							</select>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="customFile" class="col-sm-2">Upload Gambar</label>
						<div class="col-sm-12">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Pilih Gambar</label>
							</div>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="hargaBarang" class="col-sm-2 col-form-label">Harga Barang<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<input type="text" onkeyup="ubahFormat(this)" class="form-control" id="hargaBarang" placeholder="harga barang">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right mt-3">
				<button class="btn btn-danger btn-cancel" type="button">Kembali</button>&nbsp; 
				<button class="btn btn-success btn-simpan">Simpan</button>
			</div>
		</div>
	</form>
</div>

<script src="{{asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
	$(document).ready(()=>{
		var kode = `{{$kode}}`
		$("#kodeBarang").val(kode)
	})
	$(function () {
		bsCustomFileInput.init();
	});

	$('#kategoriBarang').select2({
		theme:'bootstrap4'
	})

	$(document).on('select2:open',()=>{
		document.querySelector('.select2-search__field').focus()
	})

	$(".btn-cancel").click(function(e){
		e.preventDefault()
		$("#other-page").fadeOut(function(){
			$("#other-page").empty()
			$("#main-layer").fadeIn()
		})
	})

	$(".btn-simpan").click(function(e){
		e.preventDefault()
		$(".btn-simpan").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...').attr("disabled",true)
		
		$(".btn-simpan").attr("disabled",false)
	})

	function ubahFormat(val){
		$("#hargaBarang").val(formatRupiah(val.value,"Rp. "))
	}

	function formatRupiah(angka, prefix) {
		// var number_string = angka.toString().replace(/[^,\d]/g, "")
		var number_string = angka.replace(/[^,\d]/g, "").toString()
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