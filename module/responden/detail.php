<script type="text/javascript">
//menunggu kerja
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
                    text: 'Menunggu Kerja - <?php echo $prodi ?>'
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
                    type: 'pie',
                    name: '<?php echo $prodi ?>',
                    data: [
              					<?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT menunggu_kerja, count(*)  as jumlah FROM tbl_trace WHERE prodi='$kode_prodi'  group by menunggu_kerja");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $nunggu  = $row['menunggu_kerja'];
                            $jumlah = $row['jumlah'];
                           
                            ?>
                            ['<?php echo $nunggu ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });
//bentuk perusahaan
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'bentuk-perusahaan',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Bentuk Perusahaan - <?php echo $prodi ?>'
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
                    type: 'pie',
                    name: '<?php echo $prodi ?>',
                    data: [
                        <?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT bentuk_perusahaan, count(*)  as jumlah FROM tbl_trace WHERE prodi='$kode_prodi'  group by bentuk_perusahaan");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $nunggu  = $row['bentuk_perusahaan'];
                            $jumlah = $row['jumlah'];
                           
                            ?>
                            ['<?php echo $nunggu ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });
//bidang pekerjaan ti
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'bidang-pekerjaan-ti',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Bidang Pekerjaan IT - <?php echo $prodi ?>'
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
                    type: 'pie',
                    name: '<?php echo $prodi ?>',
                    data: [
                        <?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT bidang_pekerjaanIT, count(*)  as jumlah FROM tbl_trace WHERE prodi='$kode_prodi'  group by bidang_pekerjaanIT");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $nunggu  = $row['bidang_pekerjaanIT'];
                            $jumlah = $row['jumlah'];
                           
                            ?>
                            ['<?php echo $nunggu ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });
//bidang pekerjaan non ti
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'bidang-pekerjaan-non-ti',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Bidang Pekerjaan non IT - <?php echo $prodi ?>'
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
                    type: 'pie',
                    name: '<?php echo $prodi ?>',
                    data: [
                        <?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT bidang_pekerjaannonIT, count(*)  as jumlah FROM tbl_trace WHERE prodi='$kode_prodi'  group by bidang_pekerjaannonIT");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $nunggu  = $row['bidang_pekerjaannonIT'];
                            $jumlah = $row['jumlah'];
                           
                            ?>
                            ['<?php echo $nunggu ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });
//income pertama
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'income',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Income Pertama - <?php echo $prodi ?>'
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
                    type: 'pie',
                    name: '<?php echo $prodi ?>',
                    data: [
                        <?php
                        include "./library/environment.php";
                        include "./library/database.php";

                        $query = mysqli_query($connect,"SELECT income_pertama, count(*)  as jumlah FROM tbl_trace WHERE prodi='$kode_prodi'  group by income_pertama");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $nunggu  = $row['income_pertama'];
                            $jumlah = $row['jumlah'];
                           
                            ?>
                            ['<?php echo $nunggu ?>', <?php echo $jumlah; ?> ],
                            
                        
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
	          <li class="active"><?php echo $prodi ?></li>
	        </ol>
	      </div>
	    </div>
	 </div> 
	</header>
	<div class="container">	
		<div class="row">
			<div class="col-md-6">
        <div class="panel panel-default" id="panduan">
          <div class="panel-heading unwaha-padding" style="color:#fff">
            <h3 class="panel-title" style="text-align:center"><i class="fa fa-bar-chart"></i> <?php echo $prodi ?></h3>
          </div>
          <div class="panel-body">
            <div id="chart-pie">
            </div>
          </div>
        </div>      
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" id="panduan">
					<div class="panel-heading unwaha-padding" style="color:#fff">
						<h3 class="panel-title" style="text-align:center"><i class="fa fa-bar-chart"></i> <?php echo $prodi ?></h3>
					</div>
					<div class="panel-body">
						<div id="bentuk-perusahaan">
						</div>
					</div>
				</div>			
			</div>
		</div>

    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default" id="panduan">
          <div class="panel-heading unwaha-padding" style="color:#fff">
            <h3 class="panel-title" style="text-align:center"><i class="fa fa-bar-chart"></i> <?php echo $prodi ?></h3>
          </div>
          <div class="panel-body">
            <div id="bidang-pekerjaan-ti">
            </div>
          </div>
        </div>      
      </div>
      <div class="col-md-6">
        <div class="panel panel-default" id="panduan">
          <div class="panel-heading unwaha-padding" style="color:#fff">
            <h3 class="panel-title" style="text-align:center"><i class="fa fa-bar-chart"></i> <?php echo $prodi ?></h3>
          </div>
          <div class="panel-body">
            <div id="bidang-pekerjaan-non-ti">
            </div>
          </div>
        </div>      
      </div>
    </div> 

    <div class="row">
      <div class="col-md-3">
      </div>    
      <div class="col-md-6">
        <div class="panel panel-default" id="panduan">
          <div class="panel-heading unwaha-padding" style="color:#fff">
            <h3 class="panel-title" style="text-align:center"><i class="fa fa-bar-chart"></i> <?php echo $prodi ?></h3>
          </div>
          <div class="panel-body">
            <div id="income">
            </div>
          </div>
        </div>      
      </div>
      <div class="col-md-1">
      </div>
    </div>        
	</div>	