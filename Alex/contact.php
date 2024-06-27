<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link type="text/css" rel="stylesheet" href="css/header.css" />
  <link type="text/css" rel="stylesheet" href="css/footer.css" />
	<link type="text/css" rel="stylesheet" href="css/contact.css" />
	<script type="text/javascript" src="header.js"></script>
	<script type="text/javascript" src="contact.js"></script>
</head>
<body>

	<!-- Nav Bar -->

			<div class="text">
        <h2>STUDENT SEARCH ENGINE</h2>
    </div>
    <div class="nav">
        <div class="logo">
            <a href="index.php">ALEX</a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="schools.php">Schools</a></li>
            <li><a href="fraud.php">Report Fraud</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="nav-iten">
                    <a href="register.php"><button class="btn btn-info" style="background-color:blue;"> SIGN UP</button></a>
                  </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
  <!-- End Nav Bar -->
  <div style="height: 30px;"></div>

	<div class="contain">

  <div class="wrapper">

    <div class="form">
      <h4>GET IN TOUCH</h4>
      <h2 class="form-headline">Send us a message</h2>
      <form id="submit-form" action="contact_config.php" method="POST">
        <p>
          <input id="name" name="name" class="form-input" type="text" placeholder="Your Name*">
          <small class="name-error"></small>
        </p>
        <p>
          <input id="email" name="email" class="form-input" type="email" placeholder="Your Email*">
          <small class="name-error"></small>
        </p>
        <p class="full-width">
          <input id="company-name" name="phone" class="form-input" type="text" placeholder=" +231 000 000 000*" required>
          <small></small>
        </p>
        <p class="full-width">
          <textarea  minlength="20" name="message" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
          <small></small>
        </p>
        <p class="full-width">
          <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
        </p>
        <p class="full-width">
          <input type="submit" name="Submit" class="submit-btn" value="Submit" onclick="checkValidations()">
          <button class="reset-btn" onclick="reset()">Reset</button>
        </p>
      </form>
    </div>

    <div class="contacts contact-wrapper">

      <ul>
        <li>We will give you a feedback in 24 hours <span class="highlight-text-grey">Thank You</span> for reaching out to us
          Feel Free to Call or Email Us:</li>
        <span class="hightlight-contact-info">
          <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> alex@project.com</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+86 000 2220 0033</span></li>
        </span>
      </ul>
    </div>
  </div>
</div>


<!-- Footer --> 
<div id="footer"> 
    <section id="cta"> 
        <h2>Subscribe to Newsletter</h2> 
        <p>Get Our Latest News</p> 
        <form> 
            <input type="text" placeholder="E-mail address" /> 
            <input type="submit" value="Try now" /> 
        </form> 
    </section> 
    <section id="resources"> 
        <h2>Academic</h2> 
        <div id="modules"> 
            <h2>Fraid</h2> 
            <div class="module"> 
                <h3>GO TO</h3> 
                <ul> 
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="school.php">View School</a></li> 
                    <li><a href="fraud.php">Report Fraud</a></li> 
                    <li><a href="contact.php">Contact Us</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Company</h3> 
                <ul> 
                    <li><a href="about.html">Mission</a></li> 
                    <li><a href="about.html">History</a></li> 
                    <li><a href="about.html">Staff</a></li> 
                    <li><a href="">Management</a></li> 
                    <li><a href="contact.php">Contact</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Contact</h3> 
                <ul> 
                    <li class="mail"><a href="">Support</a></li> 
                    <li class="phone"><a href="">+86 000 000 00</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Academic Fraud Report</h3> 
                <p>Please feel free to contact us and report any fraud</p> 
                <ul> 
                    <li>Weicheng District. Wenlin Road</li> 
                    <li>Xianyang City, Shaanxi Province</li> 
                </ul> 
            </div> 
        </div> 
    </section> 
    <div id="signature" aria-hidden="true"></div> 
    <footer id="legal"> 
        <p>&copy; All rights reserved.</p> 
    </footer> 
</div> 
</body>
</html>