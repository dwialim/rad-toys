<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/admin/js/adminlte.js')}}"></script>

<script src="{{asset('assets/admin/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

{{-- <script src="{{asset('assets/admin/js/pages/dashboard3.js')}}"></script> --}}
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	})
</script>
@stack('script')