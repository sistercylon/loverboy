<footer>
<div class="row">
    <div class="footer-links">
        <div class="footer-nav"><a href="/loverboy/generic-content.php">Media Kit</a></div>
        <div class="footer-nav"><a href="/loverboy/generic-content.php">Credits</a></div>
        <div class="footer-nav"><a href="/loverboy/generic-content.php">Contact</a></div>
        <div class="footer-nav"><a href="/loverboy/generic-content.php">Advertise</a></div>
    </div>
</div>
    <p>© Copyright 2015 Loverboy Magazine | Developed by <a href="#">adj.Media</a></p>
</footer>
       <?php
if(!isset($_COOKIE['eucookie']))
{ ?>
<div id="eucookielaw" >
<div id="cookiepolicy">
<p><span>Cookie Policy: </span>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet</p>
    <div class="col-md-6"><p><a id="more">Click here to read our privacy policy ></a></p></div>
   <div class="col-md-6"><p><a id="removecookie">Click here to accept our website cookies ></a></p></div>
    
</div>
</div>
<?php } ?>
    </div><!-- close main container -->
     <script type="text/javascript">
if( document.cookie.indexOf("eucookie") ===-1 ){
$("#eucookielaw").show();
}
$("#removecookie").click(function () {
SetCookie('eucookie','eucookie',365*10)
$("#eucookielaw").remove();
});
</script>
      <script type="text/javascript">
      $('.carousel').carousel({
  interval: 8000
})
      </script>
      <script>
    // media query event handler
if (matchMedia) {
	var mq = window.matchMedia("(max-width: 768px)");
	mq.addListener(WidthChange);
	WidthChange(mq);
}

// media query change
function WidthChange(mq) {
	if (mq.matches) {
        $('.navbar-default').addClass('navbar-fixed-top');
        }
}
    </script>
    
          <script>
    // media query event handler
if (matchMedia) {
	var mq = window.matchMedia("(min-width: 769px)");
	mq.addListener(WidthChange);
	WidthChange(mq);
}

// media query change
function WidthChange(mq) {
	if (mq.matches) {
        $('.navbar-default').removeClass('navbar-fixed-top');
        }
}
    </script>
    <script>        
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,
    centeredSlides: true,
    spaceBetween: 100,
  })        
  </script>