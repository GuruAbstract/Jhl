<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container"> 
  <div class="center">
    <div class="col-md-12  mx-xs-auto "><!--pt-5pt-100-->
        <div class="row">
            <div class="col-9 col-sm-7 col-md-12 col-lg-7 mx-xs-auto">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Sign Up here </h3>
                </div>
                <br>
                <form method="POST">
                    <?php
                    $error  = $this->session->flashdata('msgRegValidationErr');
                    if(isset($error) && !empty($this->session->flashdata('msgRegValidationErr'))){
                    ?>
                        <div role="alert" class="alert alert-danger form-group">
                            <strong>Oop's!: </strong> <?php echo $this->session->flashdata('msgRegValidationErr'); ?>
                        </div>
                    <?php } ?>

                    <div class="form-group">
                        <input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="First Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('firstName'); echo $fn? 'is-invalid': ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Last Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('lastName'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <select class="r-30 bg-light form-control s-12 pl-3 <?php $g = form_error('category'); echo $g? 'is-invalid': ''; ?>" name="category">
                            <option value="" disabled selected>Choose category</option>
                            <option value="Donor">Donor</option>
                            <option value="Volunteer">Volunteer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('email'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone Number"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $p = form_error('phone'); echo $p? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $ps = form_error('password'); echo $ps? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="passwordconf" id="pass2" value="" placeholder="Confirm Password"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $cps = form_error('passwordconf'); echo $cps? 'is-invalid': ''; ?>">
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