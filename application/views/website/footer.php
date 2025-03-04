<!--footer-->
<footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
             <!-- <h4 class="white no-padding">About Us</h4>-->
            </div>
            <div class="info-sec">
              <!--<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>-->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <!--<h4 class="white no-padding">Quick Links</h4>-->
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>About us</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Contact us</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>FAQ</a></li>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.easing.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
  <script src="<?php echo base_url("assets/contactform/contactform.js"); ?>"></script>


  <script>
  $(document).ready(function() {
    
     $('#cash').change(function(){
         var state = $('#cash').is(':checked')
         if(state ==true){
             $('.amou').removeAttr('hidden');
         }
         else{
             $('.amou').attr('hidden','hidden');
         }
       
        });
      
      $('#item').change(function(){
         var state2 = $('#item').is(':checked')
         if(state2 ==true){
             $('.quanty').removeAttr('hidden');
         }
         else{
             $('.quanty').attr('hidden','hidden');
         }
       
        });
     

  });
  </script>

</body>

</html>