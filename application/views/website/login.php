<?php
    include "_head.php";
?>

<body>
    <section id="banner" class="banner" style="height: 800px">
        <div class="bg-color" style="height: 800px">
            <div class="row login-form" style="padding-top: 130px">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4 login-part">
                    <div class="row">
                        <div class="col-md-12 form-group" style="padding: 0 30% 0 30%">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-responsive"></a>
                        </div>
                    </div>
                    <form method="post">
                        <?php if($this->session->flashdata('UserLoginFailed') != NULL){ ?>
                        <div role="alert" class="alert alert-danger">
                            <?php echo $this->session->flashdata('UserLoginFailed'); ?>
                        </div>
                        <?php 
                            }
                            if($this->session->flashdata('UserSuccessReg') != NULL){
                        ?>
                        <div role="alert" class="alert alert-success">
                            <?php echo $this->session->flashdata('UserSuccessReg'); ?>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="email" name="email" class="form-control br-radius-zero" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="password" name="password" class="form-control br-radius-zero" placeholder="Passsword" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-form" style="width: 100%">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="row form-group">
                        <div class="col-md-12 col-sm-4 form-group">
                            <a href="#" style="color: white">Forgot password?</a>
                        </div>
                        <div class="col-md-12 col-sm-4 form-group">
                            Not yet Registered? <a href="#" href="#modalRegister" data-toggle="modal" data-target="#modalRegister" style="color: white">Register Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4"></div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="modalRegister" tabindex="0" role="dialog" aria-labelledby="modalUpdateStatus">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content b-0" style="opacity: 0.9">
                <div class="modal-header r-0" style="background-color: rgba(28,74,90, 0.9)">
                    <h6 class="modal-title text-white" id="exampleModalLabel" style="color: white">REGISTRATION OPTION</h6>
                    <a href="#" data-dismiss="modal" aria-label="Close"
                       class="paper-nav-toggle paper-nav-white active"><i></i></a>
                </div>
                <div class="modal-body no-p no-b">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url("Website/hospitalRegistration"); ?>"><button class="btn regbtn btn-primary">Public Health Center</button></a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo base_url("Website/userRegistration"); ?>"><button class="btn regbtn btn-success">Other User</button></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>
</body>

<?php
    include "_footer.php";
?>