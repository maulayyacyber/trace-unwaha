<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-user"></i> Profile - Administrator</div>
                      <div class="panel-body"> 
                        <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <form action="conf/update_user.php" method="POST" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name= "username" class="form-control" placeholder="Username" value="<?php echo $_SESSION['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name = "email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Company" value="<?php echo $_SESSION['nama']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="password" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                           </div>
                        </div>               

                      </div>
                    </div>
                </div>
            </div>
        </div>