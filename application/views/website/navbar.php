
      <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="<?php echo base_url('website/index'); ?>">Home</a></li>
                <li class=""><a href="<?php echo base_url('website/regions'); ?>">Regions</a></li>
                <li class=""><a href="<?php echo base_url('website/donate'); ?>">Donate</a></li>
                <li class=""><a href="<?php echo base_url('Website/volunteer'); ?>">Volunteer</a></li>
				<?php
                    if($this->session->userdata('FNAME') && $this->session->userdata('LNAME')){
                ?>
                  <li class=""><a href="<?php echo base_url("Users/dashboard"); ?>"><?php echo $this->session->userdata('FNAME')." ".$this->session->userdata('LNAME'); ?></a></li>
                <?php  
                    }
                    else if($this->session->userdata('HNAME')){
                ?>
                    <li class=""><a href="<?php echo base_url("Hospital/dashboard"); ?>"><?php echo $this->session->userdata('HNAME'); ?></a></li>
                <?php
                    }
                    else {
                ?>
				<li class=""><a href="<?php echo base_url("Login/login"); ?>">login</a></li>
                <?php
                    }
                ?>
				<li class=""><a href="#"> <i class="fa fa-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>