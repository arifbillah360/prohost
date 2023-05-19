<!doctype html>
<html lang="en">
<head>
<!-- metas -->
<meta charset="utf-8">
<meta name="author" content="EraHost" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="EraHost" />
<meta name="description" content="EraHost" />
<title>ProHost</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="98">
<header class="header-nav header-white header-transparent">
  <div class="fixed-header-bar"> 
    <div class="container">
      <div class="navbar navbar-main navbar-expand-lg"> <a class="navbar-brand" href="index.html"> <img class="logo-light" alt="" title="" src="images/logo.png"> <img class="logo-dark" alt="" title="" src="images/logo.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link" href="index.html">Home</a> <i class="fa fa-angle-down px-nav-toggle"></i>
            </li>
            <li class="nav-item mm-in px-mega"> <a class="nav-link" href="javascript:void(0)">Services</a> <i class="fa fa-angle-down px-nav-toggle"></i>
              <div class="px-mega-menu mm-dorp-in">
                <div class="row no-gutters">
                  <div class="col-lg-12">
                    <div class="row px-mm-right">
                      <div class="col-lg-3">
                        <h6 class="mm-title">Hosting</h6>
                        <ul class="mm-link">
                          <li><a href="shared-hosting.html">Saudi Arabia Linux Shared Hosting</a></li>
                          <li><a href="offshore-shared-hosting.html">Offshore Linux Shared Hosting</a></li>
                          <li><a href="reseller-hosting.html">Offshore Linux Reseller Hosting</a></li>
                          <li><a href="windows-reseller-hosting.html">Offshore Windows Reseller Hosting</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3">
                        <h6 class="mm-title">Servers & Cloud</h6>
                        <ul class="mm-link">
                          <li><a href="cloud-Dedicated.html">Saudi Arabia Linux Cloud Dedicated Servers</a></li>
                          <li><a href="Dedicated-server.html">Offshore Cloud Dedicated Linux Hosting</a></li>
                          <li><a href="cloud-hosting.html">Offshore Cloud Dedicated Windows hosting</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3">
                        <h6 class="mm-title">Dadicated Server</h6>
                        <ul class="mm-link">
                          <li><a href="dedicated-server.html">Saudi Arabia Dedicated Servers</a></li>
                          <li><a href="dedicated-server.html">USA Dedicated Servers</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3">
                        <h6 class="mm-title">SQL and Email Hosting</h6>
                        <ul class="mm-link">
                          <li><a href="windows-sql-hosting.html">Offshore Windows SQL Hosting</a></li>
                          <li><a href="email-hosting.html">Email Hosting</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mm-in px-dropdown"> <a class="nav-link" href="#">Domain</a> <i class="fa fa-angle-down px-nav-toggle"></i>
              <ul class="px-dropdown-menu mm-dorp-in">
                <li><a href="domain-register.html">Domain Register</a></li>
                <li><a href="https://my.prohost.sa/cart.php?a=add&domain=transfer">Domain Transfer</a></li>
              </ul>
            </li>
            <li class="nav-item mm-in px-dropdown"> <a class="nav-link" href="#">Support</a> <i class="fa fa-angle-down px-nav-toggle"></i>
              <ul class="px-dropdown-menu mm-dorp-in">
                <li><a href="https://my.prohost.sa/submitticket.php">Open Ticket</a></li>
                <li><a href="https://my.prohost.sa/supporttickets.php">Ticket</a></li>
                <li><a href="https://my.prohost.sa/announcements">News</a></li>
                <li><a href="https://my.prohost.sa/knowledgebase">Knowledgebase</a></li>
                <li><a href="https://my.prohost.sa/serverstatus.php">Network Status</a></li>
              </ul>
            </li>
            <li class="nav-item"> <a class="nav-link" href="about-us.html">About Us</a> </li>
            <li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact Us</a> </li>
          </ul>
          <a class="d-none d-lg-inline-block ml-auto m-btn m-btn-radius m-btn-theme2nd m-btn-sm" href="https://my.prohost.sa">Login/Sign up</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header --> 
<main> 
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sales@prohost.sa";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 

 <section class="main-page-title theme-bg effect-section">
    <div class="shap-top-left"> <img class="svg_img dark-color opacity-2" src="images/style-3.svg" title="" alt=""> </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 white-color text-center">
          <h1>Thank you for contacting us. We will be in touch with you very soon.</h1>
        </div>
      </div>
    </div>
  </section>
<?php
 
}
?>

</main>
<footer class="footer">
  <div class="footer-top footer-border-dark">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-12 col-lg-4 m-15px-tb">
          <div class="theme-bg p-25px border-radius-5 white-color">
            <h5 class="m-20px-b"> Newsletter </h5>
            <div class="form-group">
              <label class="font-w-500">Join our newsletter</label>
              <input type="text" name="Subscribe" placeholder="Email Address" class="form-control">
              <button class="m-btn m-btn-theme2nd w-100 m-btn-radius m-10px-t">Subscibe</button>
            </div>
            <p class="font-small m-0px">We have strict anti-spam policy and send only one newsletter each month!</p>
          </div>
        </div>
        <div class="col-6 col-lg-2 m-15px-tb">
          <h5 class="footer-title">Servers & Cloud</h5>
          <ul class="list-unstyled links-dark footer-link-2">
            <li><a href="shared-hosting.html">Shared Hosting</a></li>
            <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
            <li><a href="wordpress-hosting.html">WordPress Hosting</a></li>
            <li><a href="dedicated-server.html">Dedicated Server</a></li>
            <li><a href="vps-server.html">VPS Server</a></li>
            <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 m-15px-tb">
          <h5 class="footer-title">Backup & Security</h5>
          <ul class="list-unstyled links-dark footer-link-2">
            <li><a href="#">SSL Certificates</a></li>
            <li><a href="#">Codeguard</a></li>
            <li><a href="#">SiteLock</a></li>
            <li><a href="#">Business Email</a></li>
            <li><a href="#">Enterprise Email</a></li>
            <li><a href="domain-register.html">Domain Register</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 m-15px-tb">
          <h5 class="footer-title">Pages</h5>
          <ul class="list-unstyled links-dark footer-link-2">
            <li> <a href="about-us.html">About Us</a> </li>
            <li> <a href="contact-us.html">Contact Us</a> </li>
            <li> <a href="blog.html">Blog</a> </li>
            <li><a href="blog-details.html">Blog Detail</a></li>
            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom footer-border-dark position-relative">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-left m-5px-tb">
          <p class="m-0px font-small">© 2020 copyright all right reserved</p>
        </div>
        <div class="col-md-6 text-center text-md-right m-5px-tb">
          <div class="social-icon si-30 gray radius nav justify-content-center justify-content-md-end"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer --> 

<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/jquery.appear.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/custom.js"></script>
<script src="form.js"></script>
</body>
</html>