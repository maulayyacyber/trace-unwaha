<?php 
error_reporting(0);
session_start();
if (!empty($_SESSION['username'] && $_SESSION['password'])) {
  header('location:media.php');
}

include('part/login/header.php');
?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
              
              <form class="form-login" action="auth.php" method="POST" style="margin-top:200px">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                <?php echo $error; ?>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
        
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        
                </div>
        
              </form>       
        
        </div>
      </div>

<?php 
include('part/login/footer.php');


 ?>