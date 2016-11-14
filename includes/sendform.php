<!doctype html>
<html lang='en-gb'>
<head>
<meta charset="utf-8">
				<title>Get in touch | Aaron McGuire | Front end web developer</title>

<!-- standard meta-->
				<meta name="description" content="Have a question or enquiry? Drop Aaron a message. ">
				<meta name="keywords" content="Web Developer, Ux, Ui, Photography, Aaron McGuire, Mcg, Aaron, Front end, Stockport, MMU, Metropolitan, University, Manchester ">
				<meta name="viewport" content="width=device-width,   maximum-scale=1.0,  initial-scale=1.0, user-scalable=yes" />
<!--  social media meta-->
				<meta property="og:type" content="website" />
				<meta property="og:title" content="Get in touch | Aaron McGuire | Front end web developer" />
				<meta property="og:description" content="Have a question or enquiry? Drop Aaron a message." />
				<meta property="og:image" content='http://aaronmcguire.co.uk/images/metaimages/contactmetabg.jpg'/>
				<meta property="og:site_name" content="Aaron McGuire" />
<!--  Twitter meta -->
				<meta name="twitter:card" content="summary_large_image" />
				<meta name="twitter:site" content="@_aaronmcguire" />
				<meta name="twitter:title" content="Aaron McGuire Portfolio" />
				<meta name="twitter:description" content="Have a question or enquiry? Drop Aaron a message. or Tweet me!" />
				<meta name="twitter:image" content="http://aaronmcguire.co.uk/images/metaimages/contactmetabg.jpg" />
<!-- Chrome frame color-->
				<meta name="theme-color" content="#ff425d">
				<meta name="msapplication-navbutton-color" content="#ff425d">
				<meta name="apple-mobile-web-app-status-bar-style" content="#ff425d">
<!--  fav icons APPLE | Android | PC -->
				<link rel="apple-touch-icon" sizes="57x57" href="../images/favicons/apple-icon-57x57.png">
				<link rel="apple-touch-icon" sizes="60x60" href="../images/favicons/apple-icon-60x60.png">
				<link rel="apple-touch-icon" sizes="72x72" href="../images/favicons/apple-icon-72x72.png">
				<link rel="apple-touch-icon" sizes="76x76" href="../images/favicons/apple-icon-76x76.png">
				<link rel="apple-touch-icon" sizes="114x114" href="../images/favicons/apple-icon-114x114.png">
				<link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/apple-icon-120x120.png">
				<link rel="apple-touch-icon" sizes="144x144" href="../images/favicons/apple-icon-144x144.png">
				<link rel="apple-touch-icon" sizes="152x152" href="../images/favicons/apple-icon-152x152.png">
				<link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-icon-180x180.png">
				<link rel="icon" type="image/png" sizes="192x192"  href="../images/favicons/android-icon-192x192.png">
				<link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
				<link rel="icon" type="image/png" sizes="96x96" href="../images/favicons/favicon-96x96.png">
				<link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
				<link rel="manifest" href="../images/favicons/manifest.json">


<!-- Main stylesheet -->
				<link rel="stylesheet" type="text/css" href="../styles/stylesheet.min.css?v=2.8">
</head>
<?php

if(isset($_POST['email'])) {

    $email_to = "aaron.mcguire0@gmail.com";

    $email_subject = "Aaron McGuire website message";





    function died($error) {


        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['comments'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $name = $_POST['name']; // required


    $email_from = $_POST['email']; // required

    $comments = $_POST['comments']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

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



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

?>

<!-- Include header -->
<?php include_once "../includes/header.php"; ?>
<!-- Include Google Analytics -->
<?php include_once("../includes/analyticstracking.php") ?>
<section class="p_static hero small ">
<div class='hero_content gradient'><h2 class='xl'>Get in touch</h2>
<p>Have a question? or maybe you have an interesting project you need help on! drop me a line.</p>
<a href='#maincontent' title='go to main content on page'><span class='arrow bounce'></span></a>
</div>
</section>
<div class='breadcrumb'><div class='container'><ul>
<li><a href='index.php' title=''>Home</a></li>
<li><span class='bread_arrow'></span></li>
<li>Get in touch</li>
</ul></div></div>
<main id='maincontent'>
	<section class='about '>
	  <div class='container'>
		<h2>Message me directly</h2><span class='line'></span><p>Thankyou for getting in touch. Aaron will reply shortly.</p>
		<form class='contact' method="post" action="sendform.php">
			<div class='input_items'>
			<label for='name'>Name:</label>
			<input id='name' name="name" placeholder="Enter your Name" required/>
		</div>
		<div class='input_items'>
			<label for='email'>Email:</label>
			<input id='email' name="email" placeholder="Enter your email" type="email" required/>
		</div>
		<div class='input_items'>
			<label for='comments'>Message:</label>
	    <textarea id='comments' rows="4" cols="50" name="comments" placeholder="Please enter your message" class="message" required></textarea>
		</div>
	    <input class='default_button' name="submit" type="submit" value="Send" />
	</form>
	</div>


	</section>
</main>




<!-- Include footer-->
<?php include_once "../includes/footer.php"; ?>
<?php

}

?>
