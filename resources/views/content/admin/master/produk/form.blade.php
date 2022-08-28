<style type="text/css">
	.select2-container--bootstrap4.select2-container--focus .select2-selection{
		border-color: #ced4da !important;
		-webkit-box-shadow: unset !important;
	}
</style>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">Form Tambah Produk</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form class="formSave">
					<div class="form-group row mb-3">
						<label for="kodeProduk" class="col-sm-2 col-form-label">Kode Produk</label>
						<div class="col-sm-12">
							<input type="text" name="kodeProduk" class="form-control" id="kodeProduk" disabled readonly>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<input type="text" name="namaProduk" class="form-control" id="namaProduk" placeholder="nama Produk">
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-6 mb-2">
							<div class="row">
								<div class="col-sm-12">
									<label for="kategoriProduk" class="col-form-label">Kategori Produk<span class="text-red">*</span></label>
									<select class="form-control" name="kategoriProduk" id="kategoriProduk">
										<option value="first" selected disabled>--Pilih Kategori--</option>
										@if(!empty($kategori))
										@foreach($kategori as $key => $val)
										<option value="{{$val->id}}">{{$val->nama_kategori}}</option>
										@endforeach
										@endif
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<label for="customFile" class="col-form-label">Upload Gambar</label>
									<div class="custom-file">
										<input type="file" name="image" class="custom-file-input" id="customFile">
										<label class="custom-file-label" for="customFile">Pilih Gambar</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-6 mb-2">
							<div class="row">
								<div class="col-sm-12">
									<label for="qtyProduk" class="col-form-label">QTY Produk<span class="text-red">*</span></label>
									<input type="number" name="qtyProduk" class="form-control" id="qtyProduk" placeholder="QTY Produk" min="0">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<label for="hargaProduk" class="col-form-label">Harga Produk<span class="text-red">*</span></label>
									<input type="text" name="hargaProduk" onkeyup="ubahFormat(this)" class="form-control" id="hargaProduk" placeholder="harga Produk">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-12 text-right mt-3">
			<button class="btn btn-danger btn-cancel" type="button">Kembali</button>&nbsp; 
			<button class="btn btn-success btn-simpan">Simpan</button>
		</div>
	</div>
</div>

<script>
	$(document).ready(()=>{
		var kode = `{{$kode}}`
		$("#kodeProduk").val(kode)
	})
	$(function () {
		bsCustomFileInput.init();
	});

	$("#qtyProduk").keypress(function(e){
		if(e.which!=8 && isNaN(String.fromCharCode(e.which))){
			e.preventDefault()
		}
	})

	$('#kategoriProduk').select2({
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
		$("#kodeProduk").prop("disabled",false)
		var data = new FormData($(".formSave")[0])
		$.ajax({
			url: "{{route('saveProduk')}}",
			type: 'POST',
			data: data,
			async: true,
			cache: false,
			contentType: false,
			processData: false,
			success: function(data){
				if(data.status=="success"){
					Swal.fire({
						title: "Berhasil!",
						text: data.message,
						icon: data.status,
						timer: 1300,
						showCancelButton: false,
						showConfirmButton: false,
					})
					$("#other-page").fadeOut(()=>{
						$("#other-page").empty()
						$("#main-layer").fadeIn()
						$("#dataTable").DataTable().ajax.reload()
					})
				}else if(data.status=="error"){
					Swal.fire('Whoops !', data.message, data.status);
					$(".btn-simpan").html("Simpan").attr("disabled",false)
				}else{
					var n = 0
					// var a = $("#customFile").rules("add",{
					// 	accept: "jpg|jpeg|png"
					// })
					console.log(data)
					for(key in data){
						var name = key
						if(name=="namaProduk"){
							name = "Nama Produk"
						}else if(name=="kategoriProduk"){
							name = "Kategori Produk"
						}else if(name=="qtyProduk"){
							name = "QTY Produk"
						}else{
							name = "Harga Produk"
						}
						n++
					}
					Swal.fire('Whoops !', name + ' Tidak Boleh Kosong!!', 'error')
					$(".btn-simpan").html("Simpan").prop("disabled",false)
				}
			}
		})
		$(".btn-simpan").html("Simpan").attr("disabled",false)
	})

	function ubahFormat(val){
		$("#hargaProduk").val(formatRupiah(val.value,"Rp. "))
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