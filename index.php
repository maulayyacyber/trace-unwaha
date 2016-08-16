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

        }else{
            require "module/404.php";
        }
    }

/* end content */

/* start footer */
	include('footer.php');
/* end footer */
?>