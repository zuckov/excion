<!-- mulai awal  footer -->
	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-lg-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo base_url(); ?>content/creative-agency/img/logo-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Developed by K.Armyansyah, Unsoed, © 2018. Template designed by <a href="https://colorlib.com" target="_blank">Colorlib </a> © 2017. All Rights Reserved. </p>
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/creative-agency/js/_global.js"></script>
  <!-- coba_ajax_jquery -->
  <script>
  $(function(){
    var baseURL = 'http://localhost/excion/';
    //load ajax buat bar
    //*
    $('#pbs1').load(baseURL+'index.php/csv/pronia', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });
    //*/
    $('#bapbs').load(baseURL+'index.php/csv/baregion', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });
  //*
    $('#bareg').load(baseURL+'index.php/csv/ba', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });//*/
    //*
    $('#bakv').load(baseURL+'index.php/csv/get_bakv', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });
    //*/
    //*
    $('#hakv').load(baseURL+'index.php/csv/coba_bakv', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });
  /*
    $('#hakv').load(baseURL+'index.php/csv/get_hakv', function() {
        $('#myTab').tab(); //ganti konten tab nya
    });
    */
    /*
    $('#myTab').bind('show', function(e) {
       var pattern=/#.+/gi //use regex to get anchor(==selector)
       var contentID = e.target.toString().match(pattern)[0]; //get anchor
       //load content for selected tab
       $(contentID).load(baseURL+contentID.replace('#',''), function(){
            $('#myTab').tab(); //reinitialize tabs
       });
    });*/
  });

  </script>


</body>

</html>
