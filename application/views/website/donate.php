<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container" style="min-height: 500px"> 
    <div class="center">
        <div class="row">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Make a Donation </h3>
                </div>
                <form action="<?php echo base_url('website/donate') ?>" method="post" role="form"  autocomplete="off">
                    

                    <div class="form-group">
                        <label><h4>Money: </h4></label>
                        <input type="checkbox" name="cash" id="cash" class="">
                    </div>
                    <div class="form-group amou" hidden>
                        <label><h4>Amount: </h4></label>
                        <input type="text" name="Amount" value="<?php echo set_value('Amount'); ?>" class="donateinput  <?php $d = form_error('Amount'); echo $d ? 'is-invalid' : ' '; ?>" id="Amount" >
                        <span class="text-danger amount"></span><br>
                        <label><h4>Currency: </h4></label>
                        <select class="curinput" name="currency">
                            <option value="TSH">TSH</option>
                            <option value="USD">USD</option>
                            <option value="EURO">EURO</option> 
                            <option value="EURO">RAND</option> 
                        </select>
                        
                       <!-- <input type="text" name="cash" class="donateinput">-->
                    </div>
                    <div class="form-group">
                        <label><h4>Item: </h4></label>
                        <input type="checkbox" name="item" id="item" class="">
                    </div>
                    <div class="form-group quanty" hidden>
                        <label><h4>Quantity: </h4></label>
                        <input type="number" min="0" name="quantity" value="<?php echo set_value('quantity'); ?>" class="donateinput  <?php $d = form_error('quantity'); echo $d ? 'is-invalid' : ' '; ?>" id="quantity" >
                        
                    </div>
                    <br>
                    <a href=""><input id="register" type="submit" class="btn btn-success donatebtn" value="Donate Now"></a>
                    <a href="#"><input id="register" type="submit" class="btn btn-primary donatebtn" value="Pledge"></a>
                </form>
          </div>
        
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>