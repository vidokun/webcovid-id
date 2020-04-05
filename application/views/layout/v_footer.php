</body>
<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Powered by <b>Code Igniter</b> | <a href="https://getstisla.com/" target="_blank">Stisla</a> | <a href="https://vidokun.com/" target="_blank">Vidokun.com</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>template/assets/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>template/assets/modules/popper.js"></script>
  <script src="<?=base_url()?>template/assets/modules/tooltip.js"></script>
  <script src="<?=base_url()?>template/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>template/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>template/assets/modules/moment.min.js"></script>
  <script src="<?=base_url()?>template/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>template/assets/js/custom.js"></script>
</body>
</html>









<!-- PWA Service Worker Code -->

<script type="text/javascript">
  // This is the "Offline copy of pages" service worker

// Add this below content to your HTML page, or add the js file to your page at the very top to register service worker

// Check compatibility for the browser we're running this in
if ("serviceWorker" in navigator) {
  if (navigator.serviceWorker.controller) {
    console.log("[PWA Builder] active service worker found, no need to register");
  } else {
    // Register the service worker
    navigator.serviceWorker
      .register("pwabuilder-sw.js", {
        scope: "./"
      })
      .then(function (reg) {
        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
      });
  }
}

</script>


<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START --> 
<script src="<?=base_url()?>template/<?=base_url()?>template/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url()?>template/<?=base_url()?>template/assets/js/materialize.js"></script>
<script src="<?=base_url()?>template/<?=base_url()?>template/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script> 
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<script type="text/javascript">
  $(document).ready(function(){
      
      $(".carousel-fullscreen.carousel-slider").carousel({
        fullWidth: true,
        indicators: true
      });
      setTimeout(autoplay, 3500);
      function autoplay() {
          $(".carousel").carousel("next");
          setTimeout(autoplay, 3500);
      }
         $(".slider3").slider({
                indicators: false,
                height: 200,
        });

  }); 
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="<?=base_url()?>template/<?=base_url()?>template/assets/js/init.js"></script>
<script src="<?=base_url()?>template/<?=base_url()?>template/assets/js/settings.js"></script>

<script src="<?=base_url()?>template/<?=base_url()?>template/assets/js/scripts.js"></script>

<!-- END CORE TEMPLATE JS - END --> 


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(10).fadeOut('slow');
  });
</script>
</body>

<!-- Mirrored from www.jaybabani.com/zak-html/app/ui-pages-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 20:07:10 GMT -->
</html>