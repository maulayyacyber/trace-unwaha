<?php

include "./library/environment.php";
include "./library/database.php";
 
 $prodi = array('0101','0102','0103','0204','0205','0306','0307','0308','0309','0410','0411','0412','0413','0514');
$query = mysqli_query($connect, "SELECT prodi,'0101', count(*)  as jumlah FROM tbl_trace group by prodi");
$i = 0;
while($row = mysqli_fetch_array($query)){
		$responden[$i++] = $row;
}
$jumlahR=$i;
		
?>	
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-4">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li class="active">Responden</li>
	        </ol>
	      </div>
	    </div>
	 </div> 
	</header>
	<div class="container">	
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">

						<div class="col-md-6">
							<div class="panel panel-default" id="panduan">
							  <div class="panel-heading unwaha-padding" style="color:#fff">
							    <h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Agama Islam</h3>
							  </div>
								  <div class="panel-body">
								  <div class="table-responsive">
									<table class="table">
									  <tbody>
									    <tr>
									      <td >Pendidikan Agama Islam</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0101'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-agama-islam" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Pendidikan Bahasa Arab</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0102'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-bahasa-arab" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Ekonomi Syariah</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0103'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/ekonomi-syariah" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									  </tbody>
									</table>
								  </div>
								  </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default" id="panduan">
							  <div class="panel-heading unwaha-padding" style="color:#fff">
							    <h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Teknologi Informasi</h3>
							  </div>
								  <div class="panel-body">
								  <div class="table-responsive">
									<table class="table">
									  <tbody>
									    <tr>
									      <td >Sistem Informasi</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0205'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/sistem-informasi" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Teknik Informatika</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0204'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/teknik-informatika" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									  </tbody>
									</table>
								  </div>								  
								  </div>
							</div>
						</div>						
					  </div>
			<div class="col-md-1">
			</div>
		</div>

		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">

						<div class="col-md-6">
							<div class="panel panel-default" id="panduan">
							  <div class="panel-heading unwaha-padding" style="color:#fff">
							    <h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Pertanian</h3>
							  </div>
								  <div class="panel-body">
								  <div class="table-responsive">
									<table class="table">
									  <tbody>
									    <tr>
									      <td >Agribisnis</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0306'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/agribisnis" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Agreokoteknologi</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0307'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>									      
									       <td><a href="<?php print $config['base_url'] ?>responden/agreokoteknologi" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Teknik Pertanian</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0309'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/teknik-pertanian" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									  </tbody>
									</table>
								  </div>
								  </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default" id="panduan">
							  <div class="panel-heading unwaha-padding" style="color:#fff">
							    <h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Ilmu Pendidikan</h3>
							  </div>
								  <div class="panel-body">
								  <div class="table-responsive">
									<table class="table">
									  <tbody>
									    <tr>
									      <td >Pendidikan Biologi</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0410'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-biologi" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Pendidikan Fisika</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0411'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-fisika" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Pendidikan Matematika</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0412'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-matematika" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>
									    <tr>
									      <td>Pendidikan Bahasa Inggris</td>
									      <td><?php 
										      $i = 0;
										      $k = 0;
										      do{
											      	if($responden[$i]['prodi'] == '0413'){
											      		$k = 1; print $responden[$i]['jumlah'];
											      	}
											      	$i++;
										      	}while($k== 0 and $jumlahR > $i);
										      	if($i >= $jumlahR){
										      		echo '0';
										      	}										      	
									       ?> orang</td>
									      <td><a href="<?php print $config['base_url'] ?>responden/pendidikan-bahasa-inggris" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
									    </tr>									    									    
									  </tbody>
									</table>
								  </div>								  
								  </div>
							</div>
						</div>						
					  </div>
			<div class="col-md-1">
			</div>
		</div>	
		<div class="row">
			<div class="col-md-3">
			</div>
				<div class="col-md-5">
								<div class="panel panel-default" id="panduan">
								  <div class="panel-heading unwaha-padding" style="color:#fff">
								    <h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Ekonomi</h3>
								  </div>
									  <div class="panel-body">
									  <div class="table-responsive">
										<table class="table">
										  <tbody>
										    <tr>
										      <td >Manajemen</td>
											      <td><?php 
												      $i = 0;
												      $k = 0;
												      do{
													      	if($responden[$i]['prodi'] == '0514'){
													      		$k = 1; print $responden[$i]['jumlah'];
													      	}
													      	$i++;
												      	}while($k== 0 and $jumlahR > $i);
												      	if($i >= $jumlahR){
												      		echo '0';
												      	}										      	
											       ?> orang</td>
										      <td><a href="<?php print $config['base_url'] ?>responden/manajemen" type="button" class="btn btn-primary btn-sm"><i class="fa fa-pie-chart"></i> Grafik</a></td>
										    </tr>			    
										  </tbody>
										</table>
									  </div>								  
									  </div>
								</div>			
				</div>
			<div class="col-md-4">
			</div>			
		</div>	
	</div>