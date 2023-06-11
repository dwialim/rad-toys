@extends('layout.admin.main')
@push('style')
<style type="text/css">
	div.dataTables_wrapper {
		width: 95%;
		margin: 0 auto;
	}
	.swal2-styled.swal2-default-outline:focus {
		box-shadow: none !important; 
	}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datatables.min.css')}}">
@endpush
@section('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Profile</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="" onclick="return false">Home</a></li>
						<li class="breadcrumb-item active">Profile</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container-fluid">
			<div id="main-layer">
				<div class="card">
					{{-- <div class="card-header text-right">
						<button class=" btn btn-primary btn-add" type="button">
							<i class="align-middle feather-19" data-feather="plus"></i> Tambah Profile
						</button>
					</div> --}}
					<div class="card-body">
						<table id="dataTable" class="table table-striped dataTable display nowrap" style="width: 100%;">
							<thead class="text-center" style="width:100%;">
								<tr>
									<th width="7%"> No</th>
									<th> Alamat</th>
									<th> Facebook</th>
									<th> Instagram</th>
									<th> No. WhatsApp</th>
									<th> Action</th>
								</tr>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#dataTable').DataTable({
			scrollX: true,
			serverSide: true,
			processing: true,
			ajax: {
				url: "{{route('getProfile')}}",
				type: "POST",
			},
			columns: [
				{data:'DT_RowIndex', name:"DT_RowIndex", render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+data+"</p>"
				}},
				{data:"alamat", name:"alamat",render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+(data??'-')+"</p>"
				}},
				{data:"facebook", name:"facebook",render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+(data??'-')+"</p>"
				}},
				{data:"instagram", name:"instagram",render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+(data??'-')+"</p>"
				}},
				{data:"whatsapp", name:"whatsapp",render:function(data,type,row){
					return "<p class='text-center' style='margin:0;'>"+(data??'-')+"</p>"
				}},
				{data:"action", name:"action"}
			]
		})
	})

	$(".btn-add").click(function(){
		$("#main-layer").hide()
		$.post("{{route('formProfile')}}").done(function(data){
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$("#other-page").empty()
				$("#main-layer").show()
			}
		})
	})

	function updated(id){
		$("#main-layer").hide()
		$.post("{{route('formProfile')}}",{id:id}).done((data)=>{
			if(data.status=="success"){
				$("#other-page").html(data.data).fadeIn()
			}else{
				$("#other-page").empty()
				$("#main-layer").show()
			}
		})
	}
</script>
@endpush