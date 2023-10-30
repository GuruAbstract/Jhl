<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container"> 
    <div class="center">
    <div class="col-md-12  mx-xs-auto "><!--pt-5pt-100-->
        <div class="row">
            <div class="col-9 col-sm-7 col-md-12 col-lg-7 mx-xs-auto">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Register your health care center </h3>
                </div>
                <br>
                <form action="" method="POST">
                    <?php
                    $error  = $this->session->flashdata('msgRegValidationErr');
                    if(isset($error) && !empty($this->session->flashdata('msgRegValidationErr'))){
                    ?>
                        <div role="alert" class="alert alert-danger">
                            <strong>Oop's!: </strong> <?php echo $this->session->flashdata('msgRegValidationErr'); ?>
                        </div>
                    <?php } ?>

                    <div class="form-group">
                        <input type="text" name="HName" value="<?php echo set_value('HName'); ?>" placeholder="Hospital Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('HName'); echo $fn? 'is-invalid': ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" name="regNumber" value="<?php echo set_value('regNumber'); ?>" placeholder="Registration number"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('regNumber'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <select name="region" class="r-30 bg-light form-control s-12 pl-3">
                            <option value="">Select the Region</option>
                            <?php
                                foreach($allRegs as $regs){
                            ?>
                            <option value="<?php echo $regs->RID; ?>"><?php echo $regs->RNAME; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder="Phyisical Address"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('address'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('email'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone number"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('phone'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"
                              class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('password'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="passwordConf" value="<?php echo set_value('passwordconf'); ?>" placeholder="Confirm Password"
                              class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('passwordconf'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                   
                    <input id="register" type="submit" class="btn btn-primary regbtn" value="Register">
                </form>
                <div class="form-footer mt-1 mb-4 card">
                    <div class="card-body">
                        Have an account ? <a href="<?php echo base_url('Login/login'); ?>" class="forget-pass">Sign In Here</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>