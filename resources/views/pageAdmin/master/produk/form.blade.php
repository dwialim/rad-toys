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
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="">
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-end mt-3">
				<button class="btn btn-danger btn-cancel" type="button">Kembali</button>
				<button class="btn btn-success btn-simpan">Simpan</button>
			</div>
		</div>
	</form>
</div>

<script>
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
</script>