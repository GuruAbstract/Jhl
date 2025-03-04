<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container"> 
  <div class="center">
    <div class="col-md-7  mx-xs-auto "><!--pt-5pt-100-->
        <div class="row">
            <div class="col-9 col-sm-7 col-md-12 col-lg-7 mx-xs-auto">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Fill in payment details </h3>
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

                    <div class="form-group">
                        <input type="text" title="Cardholder's Name" name="Cardholder's Name" value="<?php echo set_value('Cardholder Name'); ?>" placeholder="Cardholder's Name"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('Cardholder Name'); echo $fn? 'is-invalid': ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" title="Card number" name="Cnumber" value="<?php echo set_value('Cnumber'); ?>" placeholder="Card number"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('Cnumber'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
		          <div class="form-group">
                        <select class="r-30 bg-light form-control s-12 pl-3 <?php $g = form_error('card type'); echo $g? 'is-invalid': ''; ?>" name="card type">
                            <option value="" disabled selected>Choose card type</option>
                            <option value="Male">Visa</option>
                            <option value="Female">Master card</option>
                            <option value="Male">American express</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" title="Security number" name="Security number" value="<?php echo set_value('Security number'); ?>" placeholder="Security number"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $fn = form_error('Security number'); echo $fn? 'is-invalid': ''; ?>">
                    </div>
                    <div class="form-group">
                        <input type="date" title="Expiry Date" name="Expiry Date" value="<?php echo set_value('Expiry Date'); ?>" placeholder="Expiry Date"
                        class="r-30 bg-light form-control s-12 pl-3 <?php $ln = form_error('Expiry Date'); echo $ln? 'is-invalid': ''; ?>">
                    </div>
           
                   
                    <input id="Pay now" type="submit" class="btn btn-primary regbtn" value="Pay now">
                </form>
                
            </div>
          </div>
        </div>
        </div>
    </div>
  </section>

<?php include 'footer.php'; ?>