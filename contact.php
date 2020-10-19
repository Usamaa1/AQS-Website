<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'usamariz1997@gmail.com';
      // Gmail Password
      $mail->Password = '29may1997usama';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('usamariz1997@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('usamariz1997@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Subject : $subject <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AQS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    

    <!-- Css Styles -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <h1 class="lg-titl"><a href="index.html">AQS</a></h1>
            
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
               
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
       
        <div class="offcanvas__info">
            <ul>
                <li  style="color: #ffffff"><span class="icon_phone"></span> +92 307-204-0824</li>
                <li  style="color: #ffffff"><span class="fa fa-envelope"></span> Services.aqs1@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <h1 class="lg-titl"><a href="index.html">AQS</a></h1>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                           
                            <li class="active"><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option">
                        <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact info</h3>
                       
                        <ul>
                          
                            <li>
                                <span class="fa fa-mobile"></span>
                                <h5>Phone Number</h5>
                                <p>+92 307-204-0824 | +92-312-264-6835</p>
                            </li>
                            <li>
                                <span class="fa fa-headphones"></span>
                                <h5>Email</h5>
                                <p>Services.aqs1@gmail.com</p>
                            </li>
                        </ul>
                        <div class="contact__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contact-form-margin">
                    <h3>SEND MESSAGE</h3>
                    <form action="#" method="POST">
                        <div class="input-list">
                            <?= $output; ?>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                            required>
                        </div>
                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                        required></textarea>
                        <button type="submit" id="sendBtn" name="submit" value="Send"  class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
                  
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



   <!-- Footer Section Begin -->
   <footer class="footer-section">
    <div class="footer__top">
        <div class="container">
            <div class="footer__logo">
                <h1 class="lg-titl"><a href="index.html">AQS</a></h1>
                <div class="footer__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
               
            </div>
            
        </div>
    </div>
    <div class="footer__text set-bg" data-setbg="img/footer-bg.png">

        <div class="footer-container">
            <div class="footer-txt-abt"> <h3>About</h3>
                <p>We are given the good qualities and of support and services with perfection as you needed. We are 
                    the professional and skillful person. We are working as a customer satisfaction. </p>
                </div>
                <div class="footer-txt-cont">
                    <h3>CONTACT US</h3>
                    <ul class="footer__widget-info">
                        <li><span class="fa fa-mobile"></span> +92-307-204-0824 | +92-312-264-6835</li>
                        <li><span class="fas fa-envelope"></span> Services.aqs1@gmail.com</li>
                    </ul>
                </div>
           
        </div>    
            <div class="footer__text-copyright">
                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Created by AQS team.</a>
</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>