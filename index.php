<?php 

$result="";

if(isset($_POST['contact']))
{
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;

$fname = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_message =$_POST['message'];
$email_subject = "Someone contacted you about Sfoly";
$email_body = "You have received a new message from the user: $fname \n  mail: $visitor_email .\n"."Here is the message:\n $visitor_message".




// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('springfieldolympiad@gmail.com', 'Mailer');
$mail->addAddress('springfieldolympiad@gmail.com');     // Add a recipient

$mail->addReplyTo($visitor_email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
    $result= "Message could not be sent.";
} else {
     $result="Thanks ".$fname." for contacting us we will respond to you  soon. ";
}
 
}
    
?> 

<!DOCTYPE html>
<html amp lang="en">
<head>

     <title>SpringField Olympiads</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Springfield Olympiads is an Educational Organization that helps grow academic competitive spirit amongst school students of various age groups by conducting various Olympiads.">
     <meta name="keywords" content="Olympiads, olympiad , maths olympiads , Science olympiads ,national olympiads, springfield olympiads, competitive olympiads,science, arithmetic, computer training, English, General Knowledge, and other expert courses  ">
     <meta name="author" content="nagacharan">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


<script async src="https://cdn.ampproject.org/v0.js"></script>
<link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

     <link rel="shortcut icon" type="image/x-icon" href="images/springfield_olympiads_private_limited_651397.png" />
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
     <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/base-style.css">
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
<style type="text/css">
  .card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 40px;
      font-size: 20px;

    }
    .card-body{
      margin-left: 50px;
      margin-right: 50px;
     }
 .zoom:hover{
      transform: scale(2.5);
transition: transform .5s ease;
      z-index: 9999999;
     }
      marquee {
        width: 100%;
        padding: 20px 0;
        font-size: 20px;
        background-color: #D3D3D3;
        border-radius: 5%;
      }
    
</style>
<script type="text/javascript">  
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

<script src="/__/firebase/7.6.2/firebase-app.js"></script>


<script src="/__/firebase/7.6.2/firebase-analytics.js"></script>


<script src="/__/firebase/init.js"></script>


     <!-- PRE LOADER -->
      <div class="navi" id="fadeshow1" >
     <ul>
     <li><a  href="login.php">Sign in</a></li>
     <li><a  href="downform.php">Download Registration form</a></li>
     <li><a  href="becordinate.php">Become a  Coordinator</a></li>
     <li><a  href="ourprocess.php">Our Process</a></li>
    </ul>
     
  </div>  


  
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="top: 38px;">
          <div class="container">
               <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                 </button>
                 <a href="index.php" class="navbar-brand" ><span>S</span>pring<span>f</span>ield<span></span>&nbsp;<span>Oly</span>mpiads </a>
                 <img title="SpringField" class="img-fluid zoom" src="images/logo_Web.svg">

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse" style="overflow-x: hidden;">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Our Olympiads</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="faq.php" class="smoothScroll">FAQs</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">  Contact Us</a></li>

                    </ul>

               </div>

          </div>
     </section>
     
     <section id="home" >
      <div class="container-fluid"> 
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                       
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
        </div>
     </section> 

     <marquee><a href="winners.php">Grads Olympiad Results Announced</a></marquee>


     <br/>
     <section id="feature">
<div class="container">
   <div class="section-title">
    <h2 align="center">Our Olympiads</h2>
     </div>
  <div class="row " id="centerAl">

  <div class="col-lg-6 col-xs-12">
    <div class="card">
      <div class="card-body" style="height:260px;">
          <h3 class ="card-title"style="text-align: center;">GRADS</h3><br>
          <p style="text-align: center;">The Grads Olympiad is one of its kind Olympiad, primarily focusing on MBA aspirants. This is an online multiple-choice question based Olympiad. </p><br>
          <div style="margin-left:165px">
          <a class="btn btn-info btn-flex" href="grads.php" style="margin:0px auto;color:black;" >Know More</a>
          </div>
      </div>
    </div> 
  </div>

  <div class="col-lg-6 col-xs-12">
    <div class="card">
      <div class="card-body" style="height: 260px;">
        
          <h3 style="text-align: center; " >SISO</h3><br>
           <p style="text-align: center;">The Springfield International Science Olympiad (SISO), a test of competence and knowledge in the subject of Science, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards.</p>
           
           <div style="margin-left:165px">
          <a class="btn btn-info btn-flex" href="Siso.php" style="margin:0px auto;color:black;" >Know More</a>
          </div>
           
      </div>
    </div> 
  </div>

<div class="col-lg-6 col-xs-12">
    <div class="card">
      <div class="card-body" style="height: 260px;">
        
         <h3 style="text-align: center;">SIMO</h3><br>
         <p style="text-align: center;">The Springfield International Mathematics Olympiad (SIMO), a test of competence and knowledge in the subject of Mathematics, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards. </p>
         <div style="margin-left:165px">
          <a class="btn btn-info btn-flex" href="Simo.php" style="margin:0px auto;color:black;" >Know More</a><br>
          </div>
         
      </div>
    </div> 
  </div>

<div class="col-lg-6 col-xs-12 ">
    <div class="card">
      <div class="card-body" style="height: 260px;">
      <h3 style="text-align: center;">SIEO</h3><br>
          <p style="text-align: center;">The Springfield International English Olympiad (SIEO), a test of competence and knowledge in the subject of English, is held based on syllabus prescribed by CBSE/ICSE and the State Boards. </p>
 
          <div style="margin-left:165px">
          <a class="btn btn-info btn-flex" href="Sieo.php" style="margin:0px auto;color:black;" >Know More</a>
          </div>
          
      </div>
    </div> 
  </div>



</div>
</div>
</section>

     

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                         <div class="about-info">
                              <h2 style="text-align: center;">About us </h2>
                              <p>We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students.</p>
                              <p>Springfield Olympiads is an Educational Organization popularizing academic competition and assisting the development of competitive spirit among school children.<a  href="aboutus.php" ><button class="btn btn-info">Know More</button></a></p>

                         </div>
                    </div>
                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                      <div >
                           <img style="margin-left:-100px;margin-top:20px;" src="images/courses-image2.jpg">
                      </div>
                 </div>

               </div>
          </div>
        </section>

        <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                  <div class="item">

                                        <div class="tst-author">
                                             <h4>Gopal Das</h4>
                                            
                                        </div>
                                        <p>You really do help young creative minds to get quality education and ofessional job search assistance. I’d recommend it to everyone!
                                        <br/><br/><br/></p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Shivam Pillai</h4>
                                            
                                        </div>
                                        <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.
                                        <br/><br/><br/></p>

                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Jasleen Kaur</h4>
                                        
                                        </div>
                                        <p>Competitiveness is another feature of our life basically in this niche world. Here it is the platform where you can explore the wide varieties for overall development across studies and other exam preparations.</p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Ritu Barmecha</h4>
                                             
                                        </div>
                                        <p>A very nice concept to bring students on a common competitive platform which could help them to reach their full academic potential.
                                       <br/><br/><br/> </p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form"  action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>We always love hearing from you!</small></h2>
                              </div>
<h5> <?= $result; ?>  </h5>
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>

                                   <div class="g-recaptcha" data-sitekey="6LcKu_IUAAAAAOlKaWMjmCxWRSCz_UAbGlxC6G8r"></div>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="contact" value="contact">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
  <footer id="footer">
          <div class="container">
               <div class="row">
                   
                    <div class="col-md-4 col-sm-4">
                         <div class="footer-info">
                          <div class="section-title">
                                <h2>follow us on</h2>
                           </div>
                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/sfoly/"  attr="facebook icon"><i class="fab fa-facebook-square"></i></a></li>
                                   <li><a href="https://www.linkedin.com/company/solympiads/"><i class="fab fa-linkedin"></i> </a></li>
                                   <li><a href="https://www.instagram.com/sfolym/"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                              <br/><br/>
                               <a  id="Register" href="regurschool.php" >Register</a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                      <div class="footer-info">
                           <div class="section-title">
                                <h2>Contact Info</h2>
                           </div>
                           <address>
                               <p> <i class="fab fa-whatsapp" style="font-size: 26px; margin-top: 3px;"></i><a href="https://api.whatsapp.com/send?phone=+916230345161&text=Hi!">+91-6230345161</a></p>
                                 <p><i class="fas fa-envelope" style="font-size: 26px; margin-top: 3px;"></i><a href="mailto:hr@sfoly.com?subject=I have a query">hr@sfoly.com</a></p>
                                 <p><i class="fas fa-briefcase" style="font-size: 26px; margin-top: 3px;"></i><a href="careers.php">Careers</a></p>
                           </address>
                           
         <a id="feback"  href="feedback.php">Leave a Feedback</a>

                      </div>
                 </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="fb-page">
                              <div class="section-title">
                                   <h2>Like and Share </h2>
                              </div>
                             <div 
  data-href="https://www.facebook.com/sfoly"
  data-width="380"
  data-hide-cover="false"
  data-show-facepile="false"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsfoly&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="250" style=" align-self: center; overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
                         </div>
                    </div>

               </div>


          </div>
          
                                    <script type="text/javascript">                                                                                  (function () { var c = document.createElement('link'); c.type = 'text/css'; c.rel = 'stylesheet'; c.href = 'https://images.dmca.com/badges/dmca.css?ID=098d37ed-c045-4808-bd77-7dd51d52f786'; var h = document.getElementsByTagName("head")[0]; h.appendChild(c); })();</script>
                                    <div id="DMCA-badge">
                                        <div class="dm-1 dm-1-b" style="left: 0px; background-color: rgb(111, 176, 19); border-color: rgb(255, 255, 255);"><a href="https://www.dmca.com/" title="DMCA">DMCA</a></div>
                                        <div class="dm-2 dm-2-b" style="background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255);"><a href="http://www.dmca.com/Protection/Status.aspx?ID=098d37ed-c045-4808-bd77-7dd51d52f786" title="DMCA" style="color: rgb(114, 168, 39);">PROTECTED</a></div>
                                    </div>
                                
<p style="background-color: #D3D3D3; width: 100%; " id="cpright">Copyright &copy; 2018 SPRINGFIELD OLYMPIADS| All Rights Reserved | No part of this site including content and/or logo, may be copied and/or used in any manner without prior written consent of SPRINGFIELD OLYMPIADS PVT. LTD.</p>

     </footer>
     

     <!-- SCRIPTS -->

     
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     <script src="backtotop.js"></script>

</body>
</html>
