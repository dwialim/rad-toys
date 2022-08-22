<style type="text/css">
	#customFile .custom-file-input:lang(en)::after {
		content: "Select file...";
	}

	#customFile .custom-file-input:lang(en)::before {
		content: "Click me";
	}

/*when a value is selected, this class removes the content */
.custom-file-input.selected:lang(en)::after {
	content: "" !important;
}

.custom-file {
	overflow: hidden;
}
.custom-file-input {
	white-space: nowrap;
}
</style>
<div class="card">
	<div class="card-header">
		<div class="card-title">
			<h2 class="h3">Form Tambah Produk</h2>
		</div>
	</div>
	<form id="form-save">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Kode Barang</label>
						<input type="text" class="form-control" id="namaBarang">
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Barang<span style="color: red;">*</span></label>
						<input type="text" class="form-control" id="namaBarang">
					</div>
					<div class="mb-3 mt-3">
						<label class="form-label" for="gambar">Upload Gambar </label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="gambar" lang="in">
							<label class="custom-file-label" for="customFileLang">Pilih Gambar </label>
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Harga Barang<span style="color: red;">*</span></label>
						<input type="text" onkeyup="ubahFormat(this)" class="form-control" id="hargaBarang">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right mt-3">
				<button class="btn btn-danger btn-cancel" type="button">Kembali</button>
				<button class="btn btn-success btn-simpan">Simpan</button>
			</div>
		</div>
	</form>
</div>

<script>
	document.querySelector('.custom-file-input').addEventListener('change',function(e){
		var fileName = document.getElementById("gambar").files[0].name;
		var nextSibling = e.target.nextElementSibling
		nextSibling.innerText = fileName
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
		$(".btn-simpan").attr("disabled",true)
		console.log("berhasil disimpan")
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