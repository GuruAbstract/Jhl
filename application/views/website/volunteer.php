<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container"> 
  <div class="center">
    <div class="col-md-7  mx-xs-auto "><!--pt-5pt-100-->
        <div class="row">
            <div class="col-9 col-sm-7 col-md-12 col-lg-7 mx-xs-auto">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Fill all the required </h3>
                </div>
                <hr class="hrlength2">
                
                <form action="<?php echo base_url('website/volunteer') ?>" method="post" role="form"  autocomplete="off">
                    <?php
                    $error  = $this->session->flashdata('customerRegErrors');
                    if(isset($error)){
                    ?>
                        <div role="alert" class="alert alert-danger">
                            <strong>Oop's!: </strong> <?php echo $this->session->flashdata('customerRegErrors'); ?>
                        </div>
                    <?php } ?>

                    <!--<div class="form-group">
                        <input type="text" title="First Name" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="First Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('firstName'); echo $fn? 'is-invalid': ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" title="Last Name" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Last Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('lastName'); echo $ln? 'is-invalid': ''; ?>">
                    </div>-->
                    <div class="form-group">
                        <input type="text" title="Occupation" name="occupation" value="<?php echo set_value('occupation'); ?>" placeholder="Occupation"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('occupation'); echo $fn? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="date" title="Start Date" name="Stdate" value="<?php echo set_value('Stdate'); ?>" placeholder="Stdate"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('Stdate'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="date" title="Finish Date" name="Findate" value="<?php echo set_value('Findate'); ?>" placeholder="Findate"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('Findate'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
                    
                    <!--<div class="form-group">
                        <input type="text" title="Email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $e = form_error('email'); echo $e? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" title="Phone" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone Number"
                                class="r-30 bg-light form-control s-12 pl-3 <?php $p = form_error('phone'); echo $p? 'is-invalid': ''; ?>">
                    </div>-->
                    <div class="form-group">
                        <select class="r-30 bg-light form-control s-12 pl-3 <?php $g = form_error('region'); echo $g? 'is-invalid': ''; ?>" name="region">
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
                    <input id="register" type="submit" class="btn btn-primary regbtn" value="Volunteer">
                </form>
                
            </div>
          </div>
        </div>
        </div>
    </div>
  </section>

<?php include 'footer.php'; ?>