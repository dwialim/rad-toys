@extends('layoutMaster.main')
@push('style')
@endpush
@section('content')
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
		<div class="row">
			<div class="col-xl-6 col-xxl-5 d-flex">
				<div class="w-100">
					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Sales</h5>
										</div>
										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="truck"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">2.382</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Visitors</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="users"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">14.212</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Earnings</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">$21.300</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Orders</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">64</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-6 col-xxl-7">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Recent Movement</h5>
					</div>
					<div class="card-body py-3">
						<div class="chart chart-sm">
							<canvas id="chartjs-dashboard-line"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('script')
<script>
	document.addEventListener("DOMContentLoaded", function() {
		var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d")
		var gradient = ctx.createLinearGradient(0, 0, 0, 225)
		gradient.addColorStop(0, "rgba(215, 227, 244, 1)")
		gradient.addColorStop(1, "rgba(215, 227, 244, 0)")
		new Chart(document.getElementById("chartjs-dashboard-line"), {
			type: "line",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Sales ($)",
					fill: true,
					backgroundColor: gradient,
					borderColor: window.theme.primary,
					data: [2115,1562,1584,1892,1587,1923,2566,2448,2805,3438,2917,3327]
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {display: false},
				tooltips: {intersect: false},
				hover: {intersect: true},
				plugins: {
					filler: {propagate: false}
				},
				scales: {
					xAxes: [{
						reverse: true,
						gridLines: {color: "rgba(0,0,0,0.0)"}
					}],
					yAxes: [{
						ticks: {stepSize: 1000},
						display: true,
						borderDash: [3, 3],
						gridLines: {color: "rgba(0,0,0,0.0)"}
					}]
				}
			}
		})
	})
</script>
@endpush