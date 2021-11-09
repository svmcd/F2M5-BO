<link rel="stylesheet" href="<?php echo site_url( '/css/footer.css' ) ?>" media="all">

<div class="footer">
  <div class="inner-footer">

<!--  for company name and description -->
    <div class="footer-items">
      <h1>Transformer Community</h1>
      <p>Wij empoweren jongeren om mentaal gezond te zijn.</p>
    </div>

<!--  for quick links  -->
    <div class="footer-items">
      <h3>Quick Links</h3>
      <div class="border1"></div> <!--for the underline -->
        <ul>
            <?php if(isLoggedIn()):?>
                <a class="quicklink" href="<?php echo url( 'feed' ) ?>"><li>Home</li></a>
            <?php else: ?>
                <a class="quicklink" href="https://www.transformers.community"><li>Home</li></a>
            <?php endif; ?>
            <a class="quicklink" href="https://www.transformers.community/contact"><li>Contact</li></a>
            <a class="quicklink" href="https://www.transformers.community/over-ons"><li>Over ons</li></a>
        </ul>
    </div>

<!--  for contact us info -->
    <div class="footer-items">
      <h3>Contacteer ons!</h3>
      <div class="border1"></div>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"> 1051 GH</i></li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i> info@transformers.community</li>
        </ul> 
      
<!--   for social links -->
        <div class="social-media">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div> 
    </div>
  </div>
  
<!--   Footer Bottom start  -->
  <div class="footer-bottom">
  © 2021 Transformers Community
  </div>
</div>