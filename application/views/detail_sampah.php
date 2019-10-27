<style type="text/css">
	#myChart{
		border:1px solid grey;
		border-radius: 5px;
		padding: 20px;
		margin-bottom: 20px;
	}
	.container{
		margin-top:40px;
		margin-bottom:20px;
	}
	.card-detail-predict{
		width:100%; padding: 30px 5px; background: linear-gradient(to right, #487fee, #b632fa); 	border: 1px solid grey; border-radius: 5px; color: white; text-align: center;

	}
	.card-detail-predict span{
		font-size: 15px;
	}
	.card-pred{
		height: 30px;
		padding-right: 5px;
		padding-left: 5px;
	}
	.card-pred h3{
		color:white;
	}

	.tooltip1 {
	  position: relative;
	  display: inline-block;
	  border-bottom: 1px dotted black;
	  font-size: 12px;
	}

	.tooltip1 .tooltiptext {
	  visibility: hidden;
	  width: 150px;
	  background-color: #555;
	  color: #fff;
	  text-align: center;
	  border-radius: 6px;
	  padding: 5px 0;
	  position: absolute;
	  z-index: 1;
	  bottom: 125%;
	  left: 50%;
	  margin-left: -60px;
	  opacity: 0;
	  transition: opacity 0.3s;
	}

	.tooltip1 .tooltiptext::after {
	  content: "";
	  position: absolute;
	  top: 100%;
	  left: 50%;
	  margin-left: -5px;
	  border-width: 5px;
	  border-style: solid;
	  border-color: #555 transparent transparent transparent;
	}

	.tooltip1:hover .tooltiptext {
	  visibility: visible;
	  opacity: 1;
	}
	@media only screen and (max-width: 600px) {	
		#myChart{
			padding: 2px;
		}
	}
</style>
<div class="home">
	<div class="container">
	  <div class="row">
	    <div class="col">
	      <div class="home_content">
	        <div class="home_image"><img src="<?php echo base_url('assets/images/botolllll.png') ?>" alt=""></div>
	        <div class="home_title"><?php echo isset($title)? $title : 'Lulus Tepat Waktu! Aamiin' ?></div>    
	      </div>
	    </div>
	  </div>
	</div>
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 100px">
	<div class="row">
		<div class="detail-title col col-12">
			<h3><strong>Harga <?php echo $title ?></strong></h3>
		<?php if ($status['tren'] == 2) : ?>
			<span style="font-size: 1.4rem; padding-right: 20px; color: black; font-weight: bold">Rp. <?php echo $status['curr_harga'] ?></span><span style="font-size: 1.3rem; color: green"><i class="fa fa-arrow-up"></i><?php echo round($status['rate'],2) ?>%</span>
		<?php elseif ($status['tren'] == 1) : ?>
			<span style="font-size: 1.4rem; padding-right: 20px; color: black; font-weight: bold">Rp. <?php echo $status['curr_harga'] ?></span><span style="font-size: 1.3rem; color: blue"><i class="fa fa-exchange"></i><?php echo round($status['rate'],2) ?>%</span>
		<?php else : ?>
			<span style="font-size: 1.4rem; padding-right: 20px; color: black; font-weight: bold">Rp. <?php echo $status['curr_harga'] ?></span><span style="font-size: 1.3rem; color: red"><i class="fa fa-arrow-down"></i><?php echo round($status['rate'],2) ?>%</span>
		<?php endif ?>
		</div>
	</div>
	<div class="row">
		<div class="col col-md-8">
			<canvas id="myChart" height="150"></canvas>
		</div>
		<style type="text/css">
			
		</style>
		<div class="col col-md-4">
			<div class="col col-md-12">
				<div class="row" style="margin-bottom: 100px;">
					<div class="card-pred col col-4">
						<div class="tooltip1 card-detail-predict" >
							<h3><strong>MSE</strong></h3> <span><?php echo round($mse,2) ?></span>
							<span class="tooltiptext">Mean Square Error - semakin mendekati 0 semakin mendekati ketelitian</span>
						</div>
					</div>
					<div class="card-pred col col-4">
						<div class="tooltip1 card-detail-predict" >
							<h3><strong>MAE</strong></h3> <span><?php echo round($mae,2) ?></span>
							<span class="tooltiptext">Mean Absolute Error - semakin mendekati 0 semakin mendekati ketelitian</span>
						</div>
					</div>
					<div class="card-pred col col-4">
						<div class="tooltip1 card-detail-predict" >
							<h3><strong>R2</strong></h3> <span><?php echo round($r2,2) ?></span>
							<span class="tooltiptext">R-Square - semakin mendekati 1 semakin mendekati ketelitian</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-bottom: 100px;">
					<div class="card-pred col col-12">
						<div class="tooltip1 card-detail-predict" >
							<h3><strong>Harga Tertinggi</strong></h3><span>Rp. <?php echo round($harga_tertinggi,2) ?></span>
							<span class="tooltiptext">Harga terendah sepanjang waktu</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-bottom: 100px;">
					<div class="card-pred col col-12">
						<div class="tooltip1 card-detail-predict" >
							<h3><strong>Harga Terendah</strong></h3><span>Rp. <?php echo round($harga_tertinggi,2) ?></span>
							<span class="tooltiptext">Harga terendah sepanjang waktu</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		ctx.canvas.height = (window.innerWidth <768)?300:172;
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
								},
								ticks: {
									beginAtZero: true
								}
							}]
						}
		    }
		});
	</script>

</div>