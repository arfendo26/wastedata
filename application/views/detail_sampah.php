<style type="text/css">
	#myChart{
		border:1px solid grey;
		border-radius: 5px;
		padding: 20px;
	}
	.container{
		margin-top:10px;
		margin-bottom:10px;
	}
	@media only screen and (max-width: 600px) {	
		#myChart{
			padding: 2px;
		}
	}
</style>
<div class="container">
	<div class="row">
		<div class="detail-title col col-12">
			<h3><strong>Harga Plastik (Rp.)</strong></h3>
			<span style="font-size: 1.4rem; padding-right: 10px">Rp. 5.000,00</span><span style="font-size: 1.3rem; color: green"><i class="fa fa-arrow-up"></i>11%</span>
		</div>
	</div>
	<div class="row">
		<div class="col col-md-8">
			<canvas id="myChart" height="150"></canvas>
		</div>
	</div>

	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		ctx.canvas.height = (window.innerWidth <768)?300:200;
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: <?php echo json_encode($tanggal) ?>,
		        datasets: [
		        {
		            label: 'Harga',
		            fill: true,
		            data: <?php echo json_encode($harga) ?>,
		            backgroundColor: '#416ECC56',
		            borderColor: '#416ECC',
		            borderWidth: 1,
		            lineWidth: 2,
		        },
		        {
		            label: 'Harga Prediksi',
		            // fill: false,
		            borderDash: [5,5],
		            data: <?php echo json_encode($prediksi_harga) ?>,
		            backgroundColor: '#D71D1A46',
		            borderColor: '#D71D1A',
		            borderWidth: 1,
		            lineWidth: 2,
		        },
		        ]
		    },
		    options: {
		        responsive: true,
		        elements: {
							line: {
								tension: 0.01
							}
						},
						title: {
							display: true,
							text: ''
						},
						tooltips: {
							mode: 'index',
							intersect: false,
						},
						hover: {
							mode: 'nearest',
							intersect: true
						},
						scales: {
							xAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Tanggal',
									fontSize: 15,
									fontStyle: 'bold',
								},
							}],
							yAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Harga (Rp.)',
									fontSize: 15,
									fontStyle: 'bold',
								}
							}]
						}
		    }
		});
	</script>

</div>