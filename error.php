<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta robots="noindex, nofollow">
        <title>Loverboy</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://use.typekit.net/uec5wok.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
<body>

       <div id="main-container" class="container">
<header>
       <div class="ad">
           <div class="leaderboard hidden-sm hidden-xs">
               
           </div>
       </div>
       <div id="pre-nav">
                <div class="social-search">
                   <h5>Follow us</h5>
                      <ul>
                       <li class="f"><a href="#"><span class="sr-only">facebook</span></a></li>
                       <li class="t"><a href="#"><span class="sr-only">twitter</span></a></li>
                       <li class="i"><a href="#"><span class="sr-only">instagram</span></a></li>
                   </ul>
                   <h5>Your basket</h5>
                   <a href="#"><img class="aj_emptycart" src="img/cart.svg" alt="cart"/></a>
                    <div class="form-group">
                        <form role="search">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-default"></button>
                        </form>
                    </div><!-- end form group-->
            </div><!-- end social + search -->
        </div><!--end pre-nav-->
        
    <?php include 'nav.php'; ?>
   
</header>
<div id="oops-wrapper">
<div id="main-content">
 <div class="oops">
  <img src="img/404.png" alt="404 with lips graphic" />
  <h2>404 Not Found</h2>
  <p>Oops! Something's gone wrong, but don't worry! <a href="/">Just click here to go back to the front page ></a>
</p>
</div>
</div>
</div>
<footer>
<div class="row">
    <div class="footer-links">
        <div class="footer-nav"><a href="#">Media Kit</a></div>
        <div class="footer-nav"><a href="#">Credits</a></div>
        <div class="footer-nav"><a href="#">Contact</a></div>
        <div class="footer-nav"><a href="#">Advertise</a></div>
    </div>
</div>
    <p>© Copyright 2015 Loverboy Magazine | Developed by <a href="#">adj.Media</a></p>
</footer>
    </div><!-- close main container -->
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
</body>
</html>