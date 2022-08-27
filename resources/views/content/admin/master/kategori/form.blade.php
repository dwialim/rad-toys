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
						<label for="kodeBarang" class="col-sm-2 col-form-label">Kode Kategori</label>
						<div class="col-sm-12">
							<input type="text" name="kodeKategori" class="form-control" id="kodeKategori" disabled readonly>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label for="namaKategori" class="col-sm-2 col-form-label">Nama Kategori<span class="text-red">*</span></label>
						<div class="col-sm-12">
							<input type="text" name="namaKategori" class="form-control" id="namaKategori" placeholder="nama kategori">
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

<script src="{{asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
	$(document).ready(function(){
		var kode = `{{$kode}}`
		$('#kodeKategori').val(kode)
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
		var a = $('#kodeKategori').val()
		$(".btn-simpan").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...').attr("disabled",true)
		$('#kodeKategori').prop('disabled',false)
		var data = new FormData($('.formSave')[0])
		$.ajax({
			url: '{{route('saveKategori')}}',
			type: 'POST',
			data: data,
			async: true,
			cache: false,
			contentType: false,
			processData: false,
			success: function(data){
				if(data.status=='success'){
					Swal.fire({
						title: "Berhasil!",
						text: data.message,
						icon: "success",
						timer: 1300,
						showCancelButton: false,
						showConfirmButton: false
					})
					$("#other-page").fadeOut(function(){
						$("#other-page").empty()
						$("#main-layer").fadeIn()
						$("#dataTable").DataTable().ajax.reload()
					})
				}else if(data.status=='error'){
					Swal.fire('Whoops !', data.message, data.status);
					$(".btn-simpan").html("Simpan").attr("disabled",false)
				}else{
					var n = 0
					for(key in data){
						if(n==0){
							var dt0 = key
							if(dt0=='namaKategori'){
								dt0 = 'Nama Kategori'
							}
						}
						n++
					}
					Swal.fire('Whoops !', 'Kolom ' + dt0 + ' Tidak Boleh Kosong !!', 'error')
					$(".btn-simpan").html("Simpan").prop("disabled",false)
				}
			}
		})
		$("#kodeKategori").prop('disabled',true)
		$(".btn-simpan").attr("disabled",false)
	})
</script>