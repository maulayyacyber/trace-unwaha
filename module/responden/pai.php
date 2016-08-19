<script type="text/javascript">
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'chart-pie',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Data Alumni - Pendidikan Agama Islam '
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name;
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'column',
                    name: 'Pendidikan Agama Islam',
                    data: [
              					<?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT prodi, count(*)  as jumlah FROM tbl_trace WHERE prodi ='0204' group by prodi");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $prodi  = $row['prodi'];
                            $jumlah = $row['jumlah'];
                            if ($prodi == '0204') {
                              $prodi1 = 'Teknik Informatika';
                            }elseif($prodi == '0205'){
                              $prodi1 = 'Sistem Informasi';
                            }elseif ($prodi == '0306') {
                              $prodi1 = 'Agribisnis';
                            }elseif ($prodi == '0307'){
                              $prodi1 = 'Agreokoteknologi';
                            }elseif ($prodi == '0309') {
                              $prodi1 = 'Teknik Pertanian';
                            }elseif ($prodi == '0308') {
                              $prodi1 = 'Teknologi Hasil Pertanian';
                            }elseif ($prodi == '0101') {
                              $prodi1 = 'Pendidikan Agama Islam';
                            }elseif ($prodi == '0102') {
                              $prodi1 = 'Pendidikan Bahasa Arba';
                            }elseif ($prodi == '0103') {
                              $prodi1 = 'Ekonomi Syariah';
                            }elseif ($prodi == '0410') {
                              $prodi1 = 'Pendidikan Biologi';
                            }elseif ($prodi == '0411') {
                              $prodi1 = 'Pendidikan Fisika';
                            }elseif ($prodi == '0412') {
                              $prodi1 = 'Pendidikan Matematika';
                            }elseif ($prodi == '0413') {
                              $prodi1 = 'Pendidikan Bahasa Inggris';
                            }elseif ($prodi == '0514') {
                              $prodi1 = 'Manajemen';
                            }else{
                              $prodi1 = 'prodi not found';
                            }
                           
                            ?>
                            ['<?php echo $prodi1 ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });	
</script>
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(../images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-6">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li><a href="<?php print $config['base_url'] ?>responden"">Responden</a></li>
	          <li class="active">Pendidikan Agama Islam</li>
	        </ol>
	      </div>
	    </div>
	 </div> 
	</header>
	<div class="container">	
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" id="panduan">
					<div class="panel-heading unwaha-padding" style="color:#fff">
						<h3 class="panel-title" style="text-align:center"><i class="fa fa-pie-chart"></i> Fakultas Agama Islam</h3>
					</div>
					<div class="panel-body">
						<div id="chart-pie">
						</div>
					</div>
				</div>			
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>	