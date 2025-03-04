<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>

  <section id="contact" class="section-padding">
  <div class="container">
        <div class="row">
		<div class="col-md-12">
          <h1 class="ser-title text-center">All Regions to Donate</h1>
          <hr class="hrlength">
            
        </div>
            <?php
            
            if(sizeof($region) > 0){
                
                foreach($region as $row){
            ?>
            
        	<div class="col-lg-4 ">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="info ml-4">
        					<h3><a href="<?php echo base_url("website/donateitem/$row->RNAME"); ?>"><?php echo $row->RNAME; ?></a></h3>
        					<span class="position"></span>
        					<div class="text">
		        				<a href="<?php echo base_url() ;?>website/donate/<?php echo $row->RID;?>">Donate Now</a><br>
		        				<a class="text-success" href="<?php echo base_url() ;?>website/volunteer/<?php echo $row->RID;?>">Volunteer Now</a>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
            
            <?php
                }
            }
            ?>
        	
        </div>
      </div>
	</section>
    <?php include 'footer.php'; ?>
