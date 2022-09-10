<?php
	function rupiah($angka){
		$hasil_rupiah = "Rp. " . number_format((int)$angka);
		$hasil_rupiah = str_replace(',', '.', $hasil_rupiah);
		return $hasil_rupiah;
	}
?>

<style type="text/css">
	.form-control::placeholder {
		color: #495057;
		opacity: 1;
	}
	.responsive {
		width: 100%;
		max-width: 500px;
		height: auto;
	}
</style>
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">Form {{$page}} Produk</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form class="formSave">
					<input type="hidden" name="id" id="idProduk" class="form-control" value="{{(!empty($data))?$data->id:''}}">
					<div class="form-group row mb-3">
						<div class="col-sm-6">
							<label for="kodeProduk" class="col-form-label">Kode Produk</label>
							<input type="text" name="kodeProduk" class="form-control" id="kodeProduk" placeholder="{{!empty($data)?$data->kode_stok:''}}" disabled readonly>
						</div>
						<div class="col-sm-6">
							<label for="publish" class="col-form-label">Publish</label>
							<select class="form-control" name="publish" id="publish" readonly disabled>
								<option value="first" selected disabled>--Pilih Status--</option>
								<option value="0" @if(!empty($data)) {{ ($data->publish==0)?'selected':'' }} @endif>Unpublish</option>
								<option value="1" @if(!empty($data)) {{ ($data->publish==1)?'selected':'' }} @endif>Publish</option>
							</select>
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-6">
							<label for="namaProduk" class="col-form-label">Nama Produk</label>
							<select class="form-control" name="namaProduk" id="namaProduk" disabled readonly>
								<option value="first" selected disabled>--Pilih Produk--</option>
								@if(!empty($produk))
								@foreach($produk as $key => $val)
								<option value="{{$val->id}}" @if(!empty($data)){{$data->produk_id==$val->id?'selected':''}}@endif>
									{{$val->nama_produk}}
								</option>
								@endforeach
								@endif
							</select>
						</div>
						<div class="col-sm-6">
							<label for="kategoriProduk" class="col-form-label">Kategori Produk</label>
							<select class="form-control" name="kategoriProduk" id="kategoriProduk" disabled readonly>
								<option value="first" selected disabled>--Pilih Kategori--</option>
								@if(!empty($kategori))
								@foreach($kategori as $key => $val)
								<option value="{{$val->id}}" @if(!empty($data)){{$data->kategori_id==$val->id?'selected':''}}@endif>
									{{$val->nama_kategori}}
								</option>
								@endforeach
								@endif
							</select>
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-6 mb-2">
							<div class="row">
								<div class="col-sm-12">
									<label for="qtyProduk" class="col-form-label">QTY Produk</label>
									<input type="number" name="qtyProduk" class="form-control" id="qtyProduk" placeholder="{{!empty($data)?$data->qty:''}}" min="0" disabled readonly>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<label for="hargaProduk" class="col-form-label">Harga Produk</label>
									<input type="text" name="hargaProduk" onkeyup="ubahFormat(this)" class="form-control" id="hargaProduk" placeholder="{{!empty($data)?rupiah($data->harga):''}}" disabled readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row mb-3">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							@if($data->foto)
							<a class="pan" data-big="{{asset('storage/'.$data->foto)}}" href="">
								<img src="{{asset('storage/'.$data->foto)}}" class="img-thumbnail mx-auto d-block responsive">
							</a>
							@endif
						</div>
						<div class="col-sm-3"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-12 text-right mt-3">
			<button class="btn btn-danger btn-cancel" type="button">Kembali</button>
		</div>
	</div>
</div>

<script>
	$(()=>{
		$('.pan').pan()
	})
	$('.btn-cancel').click(()=>{
		$('#other-page').fadeOut(()=>{
			$('#other-page').empty()
			$('#main-layer').fadeIn()
		})
	})
</script>