
<?php 
include 'dashboard.php'; 
include 'koneksi.php';
$id_artikel=$_GET['id_artikel'];
$query=mysqli_query($k,"SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Artikel</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Artikel</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" name="update_artikel" action="update_artikel.php" enctype="multipart/form-data">
                            <?php
                                while($row=mysqli_fetch_array($query)){ ?>
                                <input type="hidden" name="id_artikel" value="<?= $row['id_artikel']; ?>">
								<div class="form-group">
									<label>Judul</label>
									<input class="form-control" placeholder="judul" name="judul" value="<?= $row['judul']; ?>" required/>
								</div>
								<div class="form-group">
									<label>Penulis</label>
									<input class="form-control" placeholder="penulis" name="penulis" value="<?= $row['penulis']; ?>">
								</div>
								<div class="form-group">
									<label>ISI</label>
									<textarea class="form-control" rows="3" name="isi" class="ckeditor"><?= $row['isi']; ?>"</textarea>
								</div>
								
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="gambar" id="gambar">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								
									<button type="submit" class="btn btn-primary" name="update_artikel">Submit Button</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</div>
                                <?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>