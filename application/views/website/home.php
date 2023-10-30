<?php
    include "_head.php";
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
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
                <li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class=""><a href="<?php echo base_url('website/regions'); ?>">Regions</a></li>
                <li class=""><a href="<?php echo base_url('Website/donate'); ?>">Donate</a></li>
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
				<li class=""><a href="#    y "> <i class="fa fa-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare donation made easy!</h1>
              <p>We made it easy for anyone to help rural communities <br>to volunteer or donate anything that can help them to improve health services.</p>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
                <div class="col-md-4 col-sm-4">
          <div class="service-info">
            
            <div class="icon-info">
              <h2>Join the Community</h2>
              <p><?php echo $totalHospitals->totalHospital; ?> of public health institutions in <?php echo $totalCountries->totalCountry; ?> of countries </p>
            </div>
          </div>
          
          </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            
            <div class="icon-info">
              <h2>Donate</h2>
              <p>Help public health institutions in rural community by donating anything.</p>
                <a href="<?php echo base_url("Website/donate"); ?>"><button class="btn btn-appoint">Donate Here</button></a>
            </div>
          </div>
          </div>
		  <div class="col-md-4 col-sm-4">
		  <div class="service-info">
            <div class="icon-info">
             <h2>be a volunteer</h2>
              <p>You want to volunteer to public health institution in rural areas?</p>
                <a href="<?php echo base_url("Website/volunteer"); ?>"><button class="btn btn-appoint">volunteer Here</button></a>
            </div>
        </div>
		</div>
      </div>
    </div>
  </section>
  <!--/ service-->
 
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« Save Rural Community<br> Save the World »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Save rural community, save the world
          <p class="text-right text-primary"><i>— Joshua Health List</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Shabaan Robert Street<br> Dar es Salaam</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@jhl.org</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+255 787 000 122</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Be a Volunteer</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>We connect you with rural communities in health issues.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright JHL. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              -->
<!--              Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

<?php
    include "_footer.php";
?>
