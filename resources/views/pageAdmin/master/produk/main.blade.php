@extends('layoutMaster.main')
@push('style')
<style type="text/css">
	.feather-19{
		stroke-width: 4px;
		width: 19px;
		height: 19px;
	}
	.card-header{
		border-radius: 8px 8px 0 0 !important;
		border-bottom: 1px solid #e1e1e1;
	}
	.card{
		border-radius: 10px 10px 11px 11px;
	}
	.card-body{
		border-radius: 0px 0px 8px 8px;
	}
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush
@section('content')
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3"><strong>Produk</strong></h1>

		<div id="main-layer">
			<div class="card">
				<div class="card-header text-end">
					<button class=" btn btn-primary btn-add" type="button">
						<i class="align-middle feather-19" data-feather="plus"></i> Tambah Produk
					</button>
				</div>
				<div class="card-body">
					<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
						<thead>
							<th>S.No</th>  
							<th>Name</th>  
							<th>Age</th>  
							<th>City</th>  
							<th>State</th>  
						</thead>
					</table>
				</div>
			</div>
		</div>
		<div id="other-page"></div>
	</div>
@endsection
@push("script")
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var datas = [
			{ name: 'Gowtham', age: 28, city: 'Coimbatore', state: 'Tamil Nadu' },
			{ name: 'Sudhan', age: 38, city: 'Ooty', state: 'Tamil Nadu' },
			{ name: 'Vignesh', age: 34, city: 'Erode', state: 'Tamil Nadu' },
			{ name: 'CSK', age: 34, city: 'Coimbatore', state: 'Tamil Nadu' },
			{ name: 'Arvind', age: 28, city: 'Coimbatore', state: 'Tamil Nadu' },
			{ name: 'Rahul', age: 38, city: 'Ooty', state: 'Tamil Nadu' },
			{ name: 'Raji', age: 34, city: 'Erode', state: 'Tamil Nadu' },
			{ name: 'Ananthi', age: 34, city: 'Coimbatore', state: 'Tamil Nadu' },
		]
		$('#dataTable').DataTable({
			scrollX: true,
			data:datas,
			columns: [
				{
					render:function(data,type,row,meta){
						return meta.row + meta.settings._iDisplayStart+1
					}
				},
				{ data: 'name' },
				{ data: 'age' },
				{ data: 'city' },
				{ data: 'state' }
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
</script>
@endpush