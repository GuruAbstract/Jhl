<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<section id="contact" class="section-padding registerForm">
  <div class="container"> 
    <div class="center">
    <div class="col-md-12  mx-xs-auto "><!--pt-5pt-100-->
        <div class="row">
            <div class="col-9 col-sm-7 col-md-12 col-lg-7 mx-xs-auto">
                <div class="mt-10" style="margin-top: 50px">
                    <h3 class="mt-2 font-weight-bold">Hospital requirements </h3>
                </div>
                <br>
                <table width="90%">
                    
                    <tr>
                        <td><th>ITEM</th></td>
                        <td><th>AMOUNT</th></td> 
                    </tr>	
                    <tr>
                    <?php
            
                    if(sizeof($needs) > 0){
                        $i = 1;
                        foreach($needs as $row){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->INAME; ?></td>
                    <td> </td>
                        
                    <td>
                        <input type="number" min="0" name="mri" value="<?php echo set_value('mri'); ?>" class="donateinput  <?php $d = form_error('mri'); echo $d ? 'is-invalid' : ' '; ?>" id="mri" > 
                        </td> 
                    </tr> 
                    <?php
                            $i++;
                        }
                        
                    }
                    ?>
                    </table>
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>