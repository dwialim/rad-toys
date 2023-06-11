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
		<h3 class="card-title">Form {{$page}} Profile</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form class="formSave">
					<input type="hidden" name="id" id="idProfile" class="form-control" value="{{(!empty($data))?$data->id:''}}">
					<div class="form-group row mb-3">
						<div class="col-sm-12">
							<label for="alamat" class="col-form-label">Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Alamat" rows="3">{{!empty($data)?$data->alamat:''}}</textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-12">
							<label for="namaProduk" class="col-form-label">Facebook</label>
							<input type="text" name="facebook" class="form-control" id="facebook" placeholder="Link Facebook" value="{{!empty($data)?$data->facebook:''}}">
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-6">
							<label for="namaProduk" class="col-form-label">Instagram</label>
							<input type="text" name="instagram" class="form-control" id="instagram" placeholder="Link Instagram" value="{{!empty($data)?$data->instagram:''}}">
						</div>
						<div class="col-sm-6">
							<label for="namaProduk" class="col-form-label">No WhatsApp</label>
							<input type="number" min="0" name="whatsapp" class="form-control" id="whatsapp" placeholder="08xxx" value="{{!empty($data)?$data->whatsapp:''}}">
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
	$("#whatsapp").keypress(function(e){
		if(e.which!=8 && isNaN(String.fromCharCode(e.which))){
			e.preventDefault()
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
		var data = new FormData($(".formSave")[0])
		$.ajax({
			url: "{{route('saveProfile')}}",
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
				}else{
					Swal.fire('Whoops !', data.message, data.status);
					$(".btn-simpan").html("Simpan").attr("disabled",false)
				}
			}
		})
		$(".btn-simpan").attr("disabled",false)
	})
</script>