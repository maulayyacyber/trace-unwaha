<?php
/* create environment */
    include('library/environment.php');
/* end environment */   

/* start header */
	include('header.php');
/* end header */

/* start content */
    if(!isset($_GET['ref'])){
        require "module/home.php";
    }else{
        if($_GET['ref'] == "home"){
            require "module/home.php";

        }elseif ($_GET['ref'] == "step-2-a") {
            require "module/angket-2-a.php";

        }elseif ($_GET['ref'] == "step-2-b") {
            require "module/angket-2-b.php";

        }elseif ($_GET['ref'] == "umpan-balik") {
            require "module/umpan-balik.php";
     
        }elseif($_GET['ref'] == "pendidikan-agama-islam"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "pendidikan-bahasa-arab"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "ekonomi-syariah"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "sistem-informasi"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "teknik-informatika"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "agribisnis"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "agroekoteknologi"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "teknik-pertanian"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "pendidikan-biologi"){
            require "module/angket-1.php";

        }elseif($_GET['ref'] == "pendidikan-fisika"){
            require "module/angket-1.php";

        }elseif($_GET['ref'] == "pendidikan-matematika"){
            require "module/angket-1.php";

        }elseif($_GET['ref'] == "pendidikan-bahasa-inggris"){
            require "module/angket-1.php";

        }elseif($_GET['ref'] == "manajemen"){
            require "module/angket-1.php";
        
        }elseif($_GET['ref'] == "responden"){
            require "module/responden.php";

        }elseif($_GET['ref'] == "responden-pendidikan-agama-islam"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-pendidikan-bahasa-arab"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-ekonomi-syariah"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-sistem-informasi"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-teknik-informatika"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-agribisnis"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-agreokoteknologi"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-teknik-pertanian"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-pendidikan-biologi"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-pendidikan-fisika"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-pendidikan-matematika"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-pendidikan-bahasa-inggris"){
            require "module/responden/detail.php";
        
        }elseif($_GET['ref'] == "responden-manajemen"){
            require "module/responden/detail.php";
        
        }else{
            require "module/404.php";
        }
    }

/* end content */

/* start footer */
	include('footer.php');
/* end footer */
?>