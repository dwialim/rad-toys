<style type="text/css">
	.select2-container--bootstrap4.select2-container--focus .select2-selection{
		border-color: #ced4da !important;
		-webkit-box-shadow: unset !important;
	}
	.form-control::placeholder {
		color: #495057;
		opacity: 0.7;
	}
</style>

<?php
	function rupiah($angka){
		$hasil_rupiah = "Rp. " . number_format((int)$angka);
		$hasil_rupiah = str_replace(',', '.', $hasil_rupiah);
		return $hasil_rupiah;
	}
?>

<div class="card {{($page=='Tambah')?'card-info':'card-primary'}}">
	<div class="card-header">
		<h3 class="card-title">Form {{$page}} Produk</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form class="formSave">
					<input type="hidden" name="id" id="idProduk" class="form-control" value="{{(!empty($data))?$data->id:''}}">
					<div class="form-group row mb-3">
						<label for="kodeProduk" class="col-sm-2 col-form-label">Kode Produk</label>
						<div class="col-sm-12">
							<input type="text" name="kodeProduk" class="form-control" id="kodeProduk" placeholder="{{!empty($data)?$data->kode_produk:$kode}}" disabled readonly>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<input type="text" name="namaProduk" class="form-control" id="namaProduk" placeholder="nama Produk" value="{{!empty($data)?$data->nama_produk:''}}">
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
	@if(empty($data))
	$(()=>{
		$('#namaProduk').focus();
	})
	@endif

	$('#namaProduk').keyup((e)=>{
		if(e.keyCode===13){
			$('.btn-simpan').click()
		}
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
		// $("#kodeProduk").prop("disabled",false)
		var kode = $("#kodeProduk").attr("placeholder")
		var data = new FormData($(".formSave")[0])
		data.append('kodeProduk',kode)
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
					for(key in data){
						var name = key
						var txt = ""
						if(name=="namaProduk"){
							name = "Nama Produk"
						}else if(name=="kategoriProduk"){
							name = "Kategori Produk"
						}else if(name=="image"){
							if(data["image"]=="The image must be a file of type: jpeg, jpg, png."){
								name = "Gambar"
								txt = " Harus Berupa File Dengan Jenis: jpeg, jpg, png!"
							}else{
								name = "Gambar"
								txt = " Harus Berupa File: jpeg, jpg, png!"
							}
						}else if(name=="qtyProduk"){
							name = "QTY Produk"
						}else{
							name = "Harga Produk"
						}
						if(name!="Gambar"){
							txt = " Tidak Boleh Kosong!"
						}
						n++
					}
					Swal.fire('Whoops!', name+txt, 'error')
					$(".btn-simpan").html("Simpan").prop("disabled",false)
				}
			}
		})
		$(".btn-simpan").attr("disabled",false)
	})
</script>