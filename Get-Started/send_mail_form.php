
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@litemediaweb.com.ng";
    $email_subject = "Sent from Contact form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists 
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['tel']) ||
        !isset($_POST['com_name']) ||
        !isset($_POST['service']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['fname']; // required
	 $name = $_POST['lname']; // required	 
     $email_from = $_POST['email']; // required
	 $tel = $_POST['tel']; // required
	 $com_name = $_POST['com_name']; // required
	 $service = $_POST['service']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Full Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($tel)."\n";
	$email_message .= "Company: ".clean_string($com_name)."\n";
	$email_message .= "Service: ".clean_string($service)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

// header( "refresh:5;url=http://" );
//echo 'Your message has been sent. You\'ll be redirected in about 5 secs. If not, click <a href="http://harryconstructions.com/">here</a> to continue to Home Page.'; 

?>
 
<!-- include your own success html here -->
 

 
<?php
 
}
?>

  <!DOCTYPE html>
  <html class=" ">
    
<!-- /contact.php  07:06:41 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        
    <title>Lite Media Web - Message Sent | Web Design Nigeria | Digital Marketing Nigeria</title>
    <meta name="description" content="World class web design and digital marketing, delivering leads into your business. Feel free to mail us at info@litemediaweb.com.ng anyday, anytime." />
    <meta name="keywords" content="litemediaweb-logo-small.png, www.litemediaweb.com.ng, litemediaweb.com.ng, web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Lagos, lagos web design, lagos ecommerce, lagos e-commerce, lagos web development, content management, cms, web site, web sites,Lite Media Web,web designer nigeria,web designer lagos" />
    <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1.0, user-scalable=no">
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />

  <link rel="stylesheet" href="animations.css"/>

 <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="../code.jquery.com/jquery-2.1.1.min.js"></script>

  <script src="../cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

  <script src="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="../use.fontawesome.com/f8b12185eb.js"></script>

<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="js/typed.min.js"></script>


    </head>
    <body>
     <div class="navbar-fixed">
   <nav>
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo" id="logo"><img src="img/litemediaweb-logo-small.png" /></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" id="header-menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="web-design.html">Web Design &amp; Development</a></li>
        <li><a href="digital-marketing.html">Digital Marketing</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="tel:08178868871"><i style="float: left; padding-right: 10px;" class="material-icons">phone</i>0817 886 8871</a></li>
      </ul>
      </nav>
      </div>
      </div>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="web-design.html">Web Design &amp; Development</a></li>
        <li><a href="digital-marketing.html">Digital Marketing</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="tel:08178868871"><i style="float: left; padding-right: 10px;" class="material-icons">phone</i>0817 886 8871</a></li>
        <li><a href="mailto:info@litemediaweb.com.ng"><i style="float: left; padding-right: 10px;" class="material-icons">email</i>info@litemediaweb.com.ng</a></li>
      </ul>
 <div class="row no-margin back-drops" id="contact-back">
<div class="overlay" id="abt"></div>
<div class="row valign-wrapper" id="home-shit">
<div class="slide-text valign">
<h1 class="title">Message Sent</h1>
<p>
Our support team will contact you within 24 hours.</p>
<span id="slide-button">Thank you for your business</span>
</div>
</div>
</div>

<div class="row container">
<div class="col s12 m7 l7">
<h2 style="text-align: center;font-weight: bold; color: #2c3e50;"> Send a message</h2>
  <div class="row contact-form">
  <a name="contact-part"></a>
      <form action="send_mail_form.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input type="text" name="fname" class="validate" value="" required >
          <label for="fname">First Name</label>
        </div>
        <div class="input-field col s12 l6 m6">
          <input type="text" class="validate" name="lname" value="" required >
          <label for="lname">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input type="email" class="validate" name="email" value="" required >
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12 l6 m6">
          <input type="tel" class="validate" name="tel" value="" required >
          <label for="tel">Telephone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input type="text" class="validate" name="com_name" value="" required >
          <label for="com_name">Company Name</label>
        </div>
        <div class="input-field col s12 l6 m6">
    <select name="service" required >
      <option value="" disabled selected>Select One</option>
      <option value="Website Design">Web Design & Development</option>
      <option value="Ecommerce">Ecommerce</option>
      <option value="Online Marketing">Online Marketing</option>
      <option value="Logo">Logo Design</option>
      <option value="Other">Other</option>
    </select>
    <label>Service Required</label>
  </div>
  <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="message" required ></textarea>
          <label for="textarea1">Project Details</label>
          </div>
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
      </div>
    
    </form>
  </div>
</div>
<div class="col s12 m4 l4 offset-l1 offset-m1" id="contact-into">
<div class="row bluee">
<div class="col s2">
<i class="fa fa-phone" aria-hidden="true"></i></div> <div class="col s8 mar">0817 886 8871</div></div>

<div class="row bluee">
	<div class="col s2">
	<i class="fa fa-envelope" aria-hidden="true"></i> 
	</div>
	 
	<div class="col s8 mar">info@litemediaweb.com.ng
	</div>
</div>

<div class="row bluee">
	<div class="col s2">
	<i class="fa fa-map-marker" aria-hidden="true"></i>
	</div>
	
	<div class="col s8 mar">Block 1, Flat 5, Godmon Estate, Okota (Round About), Lagos
	</div>
</div>
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

<div class="google-maps">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31712.293012893468!2d3.3013056197145594!3d6.517048201153286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e8cd3fdcf11%3A0x41b3530b7983c376!2sGodmon%20Estate!5e0!3m2!1sen!2sng!4v1584431893905!5m2!1sen!2sng" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-label="Block 1, Flat 5, Godmon Estate"></iframe>


</div>
</div>
</div>

<div class="row no-margin" id="footer">
<div class="row container">
Copyright © 2013 - 2020 Lite Media Web Solutions. All rights reserved.
</div>
 <script src="css3-animate-it.js"></script>
 <script src="notify.min.js"></script>

 <script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel ({
    center: true,
    items:5,
    loop:true,
    margin:10,
    nav: false,
    autoPlay:true,
  autoplaySpeed: 700,
autoplayTimeout:700,
    responsive:{
        600:{
            items:1
        }
    }
});
  });
</script>
<script>$(document).ready(function() {
    $('select').material_select();
  });</script>
  
<script>
$(document ).ready(function() {
     $(".button-collapse").sideNav();
});</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44995650-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61de7ac3b84f7301d32a94d2/1fp6gv3ca';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

   </body>
    
<!-- /contact.php  07:06:41 GMT -->
</html>
