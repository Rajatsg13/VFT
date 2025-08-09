<?php


 if (isset($_POST['submit'])) {
    
    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
    $recaptcha_secret = "6LeMZQoqAAAAAMh5JCrJ_dxwIRTiimWLZbqxCxmU";
    
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha= json_decode($recaptcha,true);
    echo "$recaptcha";
    if($recaptcha['success'] == 1)
    {
        require_once ('/home/vfinetun/public_html/vendor/autoload.php');
    	$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey(
    		'api-key',
    		'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'
    	);
    	// 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
    	$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
    		new GuzzleHttp\Client(),
    		$config
    	);
    
    	$from = $_POST['email']; // this is the sender's Email address
    	$first_name = $_POST['firstname'];
    	$email = $_POST['email'];
    	$mobile = $_POST['mobile'];
    	$product = $_POST['product'];
    	$sub = $_POST['subject'];
    
    
    	$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
    	$sendSmtpEmail['subject'] = 'vFineTune Limited. Connected Successfully!! ';
    	$sendSmtpEmail['htmlContent'] = "<html>
    
    	<body>
    		<h1>Welcome to vFineTune Limited!! Thank you for contacting us.. We will contact you soon </h1>
    		<h2>User Details...</h2>
    		<table>
    			<tr>
    				<th>Username</th>
    				<th>:</th>
    				<td>$first_name</td>
    			</tr>
    			<tr>
    				<th>Email</th>
    				<th>:</th>
    				<td>$email</td>
    			</tr>
    			<tr>
    				<th>Phone Number</th>
    				<th>:</th>
    				<td>$mobile</td>
    			</tr>
    			<tr>
    			<tr>
    				<th>Product Name</th>
    				<th>:</th>
    				<td>$product</td>
    			</tr>
    			<tr>
    				<th>Message</th>
    				<th>:</th>
    				<td>$sub</td>
    			</tr>
    		</table>
    	</body>
    
    	</html>";
    
    	$sendSmtpEmail['sender'] = array('name' => 'vFineTune Limited', 'email' => 'samj@vfinetune.com');
    	$sendSmtpEmail['to'] = array(
    		array('email' => $email, 'name' => $first_name),
    		array('email' => 'samj@vfinetune.com', 'name' => 'vFineTune Limited')
    	);
    	try {
    		echo "Your message has been sent. Thank you";
    		$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    	} catch (Exception $e) {
    		echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
    	}
    }
    else 
    {
        
    }
    


}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<title>Contact Us</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<script>
		function Validatename() {
			var email = document.getElementById("get_quote_name").value;
			var lblError = document.getElementById("namError");
			lblError.innerHTML = "";
			var expr = /^[a-zA-Z ]{5,30}$/;

			if (!expr.test(email)) {
				lblError.innerHTML = "Invalid Name.";
				document.getElementById("submit").disabled = true;
			}

		}

		function validateEmail(emailField) {
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var lblError = document.getElementById("lblError");
			if (document.getElementById("get_quote_email").value == "") {
				lblError.innerHTML = "Email is Required";
			} else {
				if (reg.test(emailField.value) == false) {
					lblError.innerHTML = "Invalid Email.";
					document.getElementById("submit").disabled = true;

					return false;
				} else {
					lblError.innerHTML = "";
				}
			}

			return true;

		}

		function restrictAlphabets(e) {
			var x = e.which || e.keycode;
			if ((x >= 48 && x <= 57))
				return true;
			else
				return false;
		}

		function namerestrict(e) {
			var x = e.which || e.keycode;
			if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || (x == 32))
				return true;
			else
				return false;
		}


		function message() {



			var name = document.getElementById("get_quote_name").value;
			var email = document.getElementById("get_quote_email").value;
			var mobile = document.getElementById("get_quote_mobile").value;

			var product = document.getElementById("get_quote_budget").value;
			var mess = document.getElementById("get_quote_desc").value;

			var submit = document.getElementById("submitid");

			if (name == "" || email == "" || mobile == "" || product == "" || mess == "") {
				submit.innerHTML = "*You're requested to enter all the fields";
				submit.style.color = "red";

			} else {
				submit.innerHTML = "Thanks for contacting us. We will be in touch with you very soon. ";
				submit.style.color = "green";
				// document.getElementById("get_quote_name").value=" "
				// document.getElementById("get_quote_email").value=" "
				// document.getElementById("get_quote_mobile").value=" "
				// document.getElementById("get_quote_budget").value=" "
				// document.getElementById("get_quote_desc").value=" "
			}

			//alert("jdj");
			//   $from = $_POST['email']; // this is the sender's Email address
			//   $first_name = $_POST['firstname'];
			//   $email = $_POST['email'];
			//   $mobile = $_POST['mobile'];
			//     $product = $_POST['product'];
			//      $sub = $_POST['subject'];

			//                                     function clean_string()                                  
			//                                     {
			//                                         $bad = array("content-type","bcc:","to:","cc:","href");
			//                                           return str_replace($bad,"",$string);
			//                                     }
			//                                     $email_from="vfinetune";
			//                                     $email_subject = "Connected Successfully";

			//                                     $email_message = "Welcome to vFineTune Limited !!\nThank you for contacting us\nWe will contact you soon \n";

			//                                     $email_message1 = "vFineTune Limited !!\nCustomer Details... \n";

			//                                     $email_message .= "Username: ".clean_string($first_name)."\n";

			//                                     $email_message .= "Email: ".clean_string($email)."\n";
			//                                     $email_message .= "Mobile: ".clean_string($mobile)."\n";
			//                                     $email_message .= "Product Name: ".clean_string($product)."\n";
			//                                     $email_message .= "Message : ".clean_string($sub)."\n";

			//                                   $email_message1 .= "Username: ".clean_string($first_name)."\n";

			//                                     $email_message1 .= "Email: ".clean_string($email)."\n";
			//                                     $email_message1 .= "Mobile: ".clean_string($mobile)."\n";
			//                                     $email_message1 .= "Product Name: ".clean_string($product)."\n";
			//                                     $email_message1 .= "Message : ".clean_string($sub)."\n";




			//                                     $headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" ;

			//                                     @mail($from, $email_subject, $email_message, $headers);
			//                                  //   @mail("samj@vfinetune.com", $email_subject, $email_message, $headers);
			//                                     @mail("dharani2vfinetune@gmail.com", $email_subject, $email_message1, $headers);

		}
	</script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="keywords" content="Portable Integrated RFID Reader,Fixed Integrated Reader,RFID Desktop Reader">
	<link href="images/info.png" rel="shortcut icon">



	<!--[if lt IE 9]>
	<script src="/template/js/html5shiv.min.js"></script>
	<script src="/template/js/respond.min.js"></script>
  <![endif]-->
	<!-- Google Tag Manager -->



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<!-- META SETTINGS  -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	<meta name="apple-touch-fullscreen" content="yes">

	<!-- FAVICONS  -->
	<link rel="icon" sizes="16x16" type="image/png" href="">
	<meta name="theme-color" content="#ffffff">
	<title>RFID Solutions RFID Tag Readers - Bangalore</title>
	<meta name="description"
		content="RFID Solutions , RFID Tag, RFID Asset track, RFID readers, RFID technology, UHF Label tags, RFID card,RF Library, RFID File tracking solution">
	<meta name="robots" content="noodp">
	<meta name="keywords"
		content="RFID company in Bangalore, chennai, Coimbatore RFID Solutions, rfid tag, rfid asset tracking solution, rfid reader, rfid products and solutions">
	<link rel="canonical" href="https://vfinetune.com/">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="RFID Solutions RFID Tag Readers - Bangalore, coimbatore, chennai, pune">
	<meta property="og:description"
		content="RFID Solutions , RFID Tag, RFID Asset track, RFID readers, RFID technology, UHF Label tags, RFID card,RF Library, RFID File tracking solution">
	<meta property="og:url" content="https://vfinetune.com/">
	<meta property="og:site_name" content="RFID">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:description"
		content="RFID Solutions , RFID Tag, RFID Asset track, RFID readers, RFID technology, UHF Label tags, RFID card,RF Library, RFID File tracking solution">
	<meta name="twitter:title" content="RFID Solutions RFID Tag Readers - Bangalore, Mumbai, Delhi, Pune">
	<meta name="twitter:image" content="https://vfinetune.com/">
	<!--<script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://embed.tawk.to/5748134d06abb9034a4145f6/default" charset="UTF-8" crossorigin="*"></script><script async="" src="https://embed.tawk.to/5748134d06abb9034a4145f6/default" charset="UTF-8" crossorigin="*"></script><script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https://vfinetune.com/","name":"vfinetune.com","potentialAction":{"@type":"SearchAction","target":"https://vfinetune.com/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>-->
	<script type="application/ld+json">
	{
		"@context": "http:\/\/schema.org",
		"@type": "Organization",
		"url": "https://vfinetune.com/",
		"sameAs": [],
		"name": "Asset Online Pvt Limited",
		"logo": ""
	}
	</script>
	<!-- / Yoast SEO plugin. -->



	<meta name="generator" content="WordPress 4.2.27">
	<link rel="shortlink" href="https://vfinetune.com/">
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://www.rfidforbusiness.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://www.rfidforbusiness.com/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]-->
	<style type="text/css" title="dynamic-css" class="options-output">
		.copyright {
			height: 50px;
		}
	</style>
	<style type="text/css" data-type="vc_custom-css">
		.products h3:hover {
			transform: scale(1.1);
			transition: 0.5s;
		}

		.topbar {
			display: none;
		}

		.breadcrumbs {
			display: none;
		}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1461214136679 {
			background-color: rgba(38, 156, 255, 0.79) !important;
			*background-color: rgb(38, 156, 255) !important;
		}

		.vc_custom_1462268788292 {
			margin-top: 30px !important;
			background-color: rgba(8, 142, 255, 0.52) !important;
			*background-color: rgb(8, 142, 255) !important;
		}

		.vc_custom_1462268903601 {
			background-color: rgba(8, 142, 255, 0.52) !important;
			*background-color: rgb(8, 142, 255) !important;
		}

		.vc_custom_1447875610924 {
			background-color: #269cff !important;
		}

		.vc_custom_1446619389066 {
			background-color: #088eff !important;
		}

		.vc_custom_1461141648564 {
			padding-top: 10px !important;
			padding-right: 10px !important;
			padding-bottom: 10px !important;
			padding-left: 10px !important;
		}

		.vc_custom_1461826591039 {
			margin-right: 35px !important;
			margin-left: 35px !important;
			padding-top: 10px !important;
			padding-right: 10px !important;
			padding-bottom: 10px !important;
			padding-left: 10px !important;
		}

		.vc_custom_1461834167110 {
			margin-right: 35px !important;
			margin-left: 35px !important;
			padding-top: 10px !important;
			padding-right: 10px !important;
			padding-bottom: 10px !important;
			padding-left: 10px !important;
		}

		.vc_custom_1461827397330 {
			margin-top: 0px !important;
			margin-right: 0px !important;
			margin-bottom: 0px !important;
			margin-left: 0px !important;
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 15px !important;
			padding-left: 15px !important;
			background-color: #e3e3e3 !important;
		}

		.vc_custom_1461827407714 {
			margin-top: 0px !important;
			margin-right: 0px !important;
			margin-bottom: 0px !important;
			margin-left: 0px !important;
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 15px !important;
			padding-left: 15px !important;
			background-color: #98afc7 !important;
		}

		.vc_custom_1461217630788 {
			margin: 0px !important;
			padding: 15px !important;
			background-color: #e3e3e3 !important;
		}

		.vc_custom_1461144642916 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 15px !important;
			padding-left: 15px !important;
			background-color: #98afc7 !important;
		}

		.vc_custom_1461144095242 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 15px !important;
			padding-left: 15px !important;
			background-color: #e3e3e3 !important;
		}

		.vc_custom_1461144653726 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 15px !important;
			padding-left: 15px !important;
			background-color: #98afc7 !important;
		}

		.vc_custom_1461218420849 {
			margin-right: 35px !important;
			margin-left: 35px !important;
			padding-top: 10px !important;
			padding-right: 10px !important;
			padding-bottom: 10px !important;
			padding-left: 10px !important;
		}

		.vc_custom_1461218420849 {
			margin-right: 35px !important;
			margin-left: 35px !important;
			padding-top: 10px !important;
			padding-right: 10px !important;
			padding-bottom: 10px !important;
			padding-left: 10px !important;
		}

		.vc_custom_1461300204259 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #bababa !important;
		}

		.vc_custom_1461219018320 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #1e90ff !important;
		}

		.vc_custom_1461300016845 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #bababa !important;
		}

		.vc_custom_1461219031878 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #1e90ff !important;
		}

		.vc_custom_1461218614023 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #bababa !important;
		}

		.vc_custom_1461219041223 {
			padding-top: 15px !important;
			padding-right: 15px !important;
			padding-bottom: 0px !important;
			padding-left: 15px !important;
			background-color: #1e90ff !important;
		}

		.vc_custom_1462269801777 {
			margin-right: 10px !important;
			margin-left: 10px !important;
			padding-top: 20px !important;
			padding-right: 10px !important;
			padding-bottom: 20px !important;
			padding-left: 10px !important;
			background-color: rgba(8, 142, 255, 0.52) !important;
			*background-color: rgb(8, 142, 255) !important;
		}

		.vc_custom_1462269801777 {
			margin-right: 10px !important;
			margin-left: 10px !important;
			padding-top: 20px !important;
			padding-right: 10px !important;
			padding-bottom: 20px !important;
			padding-left: 10px !important;
			background-color: rgba(8, 142, 255, 0.52) !important;
			*background-color: rgb(8, 142, 255) !important;
		}
	</style><noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
	<style type="text/css">
		@keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-moz-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-webkit-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		#soh6geE-1588841843047 {
			outline: none !important;
			visibility: visible !important;
			resize: none !important;
			box-shadow: none !important;
			overflow: visible !important;
			background: none !important;
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity1) !important;
			-moz-opacity: 1 !important;
			-khtml-opacity: 1 !important;
			top: auto !important;
			right: 10px !important;
			bottom: 0px !important;
			left: auto !important;
			position: fixed !important;
			border: 0 !important;
			min-height: 0 !important;
			min-width: 0 !important;
			max-height: none !important;
			max-width: none !important;
			padding: 0 !important;
			margin: 0 !important;
			-moz-transition-property: none !important;
			-webkit-transition-property: none !important;
			-o-transition-property: none !important;
			transition-property: none !important;
			transform: none !important;
			-webkit-transform: none !important;
			-ms-transform: none !important;
			width: auto !important;
			height: auto !important;
			display: none !important;
			z-index: 2000000000 !important;
			background-color: transparent !important;
			cursor: auto !important;
			float: none !important;
			border-radius: unset !important;
			pointer-events: auto !important
		}

		#O0x8rnL-1588841843048.open {
			animation: tawkMaxOpen .25s ease !important;
		}
	</style>
	<title>vFineTune Limited</title>
	<meta name="description" content="vFineTune Limited global Information Technology, Consulting and Business Process Automation Company. We harness the power of Intelligence Automation, Cognitive computing, Cloud, Digital Quality Assurance, IoT Products, Analytics and Emerging technologies to help our clients adapt to the Digitalization of their Business solutions and make them successful. Our Value as a Service (VaaS) strive innovative solutions and a flexible engagement approach significance our customers stay ahead of the curve, drive revenues, and enhance market position.

" />
	<meta name="keywords"
		content="vFineTune Limited Center of Excellence, Product Development Company in Coimbatore, Digital Quality of Assurance Lab in Coimbatore, IT Company in United Kingdom  " />

	<meta name="Digitial Quality of Assurance- keywords"
		content="AGILE & DEVOPS Testing,Setting TDD & BDD Approaches,Mobile Automation,Performance Testing, What is Security Testing, IoT Testing,Ux Functional Automation,Interactive Voice Response (IVR) Testing,GIS & Image Testing,Quality Maturity Model Assessment,Selenium Automation Testing, " />

	<meta name="Industrialization of Project Center of Excellence"
		content="Product Innovation, RFID, RFID Tags,Programs of IPCOE in Coimbatore, GPS,Live Tracking, Automatic, Inventory Technology in Coimbatore, Live Stock System in Coimbatore, Warehouse Management, Physical stock, RFID Handheld and Fixed Reader" />
	<meta name="vfinetune"
		content="Product Innovation, RFID, RFID Tags,Programs of IPCOE in Coimbatore, GPS,Live Tracking, Automatic, Inventory Technology in Coimbatore, Live Stock System in Coimbatore, Warehouse Management, Physical stock, RFID Handheld and Fixed Reader" />

	<!--Favicons-->
	<!--Favicons-->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Muli google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	<!--Custome stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Muli google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

	<!--Custome stylesheet -->
	<link rel="stylesheet" href="../css/services-style.css">

	<link rel="stylesheet" href="../css/navbar.css">

	<link rel="stylesheet" href="../css/material-form.css">
	<link rel="stylesheet" href="plugins/formvalidation/css/formValidation.min.css">

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-979209242"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-979209242');
	</script>
    <script type="text/javascript">
      var onSubmit = function() {
        document.getElementById("form-submit").submit();
      };
    </script>
</head>

<body>

	<!-- Navbar starts -->
	<!-- Navbar starts -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light sc_nav_bg">
		<a class="navbar-brand" href="https://vfinetune.com"><img src="../images/info_logo.jpg" style="height:45px;"
				alt="" class="img-fluid"></a> <button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
			aria-label="Toggle navigation">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
				aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">


				<ul class="navbar-nav ml-auto">

					<li class="nav-item">
						<a class="nav-link" href="index.php">The Firm</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Services

						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="dm.php">Digital Marketing</a>
							<a class="dropdown-item" href="rfid.php">RFID</a>
							<a class="dropdown-item" href="dqa.php">DQA</a>
							<a class="dropdown-item" href="ipcoe.php">Ditial Transformtion</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Products
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="ais.php">Smart TrackEX</a>
						</div>
					</li>

					<li class="nav-item">
                        <a class="nav-link" href="career.php"> Career</a>
                    </li>


					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact us</a>
					</li>
				</ul>

			</div>
	</nav>

	<body>

		<!-- Navbar starts -->
		<!-- Navbar starts -->
		<div class="enquiry_float_btn">
		</div>
		<div class="container-fluid sc_no_padding cm_header_bg" style="background:url(../images/contact/contact.jpg);	background-size:cover;
	background-position:center center;">
			<div class="container">
				<br>
				<br>

				<br>

				<br>

				<h1 class="cm_title text-center"><span>Let's Connect</span></h1>
			</div>
		</div>

		<div class="container cm_pad_top_bot_40">

			<div class="get_quote_card">
				<div style="margin-top:30px; margin-bottom:30px;">
					<div class="alert alert-success hide text-center" id="show_success_message" role="alert">
						Your message sent successfully. We will contact you shortly.
					</div>

					<div class="alert alert-danger hide" id="show_error_message" role="alert">

					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6 col-ls-6 col-md-6">
						<h4 class="gardient_text text-center"><span>Core Values</span></h4>
						<br>
						<ul>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Accountability</span> – Proactive
									involvement & Dedication</p>
							</li>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Integrity</span> – Be honest and
									meet the commitments</p>
							</li>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Transparency</span> – To share
									all challenges upfront and provide
									necessary supports</p>
							</li>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Teamwork</span> – Collaborative
									culture and handhold approach</p>
							</li>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Efficient</span> – Best
									productivity with shortest time</p>
							</li>
							<li>
								<p class="hc_content"><span style="font-weight: 1000;">Value for Money</span> – Each
									investment will have assured Returns
								</p>
							</li>

						</ul>
					</div>

					<div class="col-sm-6 col-xs-6 col-ls-6 col-md-6">

						<form id="contact" action="" method="post" onsubmit="return true" role="form">
							<span id="submitid"></span>
							<div class="form-group form-element form-input">
								<input id="get_quote_name" name="firstname" class="form-element-field"
									onkeypress='return namerestrict(event)' type="text" required />
								<div class="form-element-bar"></div>
								<label class="form-element-label" for="get_quote_name">Name</label>
								<span id="namError" style="color: red"></span>

							</div>
							<div class="form-group form-element form-input">
								<input id="get_quote_email" name="email" class="form-element-field"
									onblur="validateEmail(this);" type="text" />
								<div class="form-element-bar"></div>

								<label class="form-element-label" for="get_quote_email">Email</label>
								<span id="lblError" style="color: red"></span>

							</div>

							<div class="form-group form-element form-input">
								<input id="get_quote_mobile" name="mobile" class="form-element-field"
									onkeypress='return restrictAlphabets(event)' maxlength="10" minlength="10"
									type="text" />
								<div class="form-element-bar"> </div>
								<label class="form-element-label" for="get_quote_mobile">Mobile</label>
								<span id="mobilError" style="color: red"></span>

							</div>

							<div class="form-group form-element form-select">
								<select id="get_quote_budget" name="product" class="required form-element-field">
									<option value="Smart EcomEX">Smart EcomEX</option>
									<option value="Smart SurgEX">Smart SurgEX
									</option>
									<option value="Smart TrackEX">Smart TrackEX</option>
									<option value="Smart LegalEX">Smart LegalEX</option>
									<option value="Digital Marketing">Digital Marketing</option>
									<option value="DQA Services">DQA Services
									</option>
									<option value="" selected="selected" visible="false"></option>

								</select>
								<div class="form-element-bar"></div>
								<label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Our
									Products</label>
							</div>

							<div class="form-group form-element form-textarea">
								<textarea id="get_quote_desc" name="subject" class="form-element-field"
									placeholder=" "></textarea>
								<div class="form-element-bar"></div>
								<label class="form-element-label" for="get_quote_desc">Message</label>
							</div>
                            
							<div class="row pad_top_30">
							   
								<div class="col">
									<div class="text-center">
										<button type="submit" id="form-submit" name="submit"
											data-sitekey="6LeMZQoqAAAAAIriEvzOWcmNBbMDsLFQfxYnvm8G" class="g-recaptcha violet_pink_btn" data-callback="onSubmit">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>


			</div>

		</div>




		<div class="section fp-auto-height fp-auto-height-responsive" id="section5">
		<div class="container-fluid">
				<div class="row footer_padding">
					<div class="col-sm-1">

					</div>
					<div class="col-sm-6">
						<h4 style="color:#fff;	font-size:20px;font-weight:800;">About Us</h4>
						<p style="	color:#fff;	text-align:justify;	font-size:16px;	font-weight:700;">
							vFineTune is a fast-growing IT Company that delivers cutting edge solutions to businesses
							across geographies and start-ups. We have been helping companies for their business
							processes and established brands reimagine their business through digitalisation.
						</p>
						<p style="	color:#fff;	text-align:justify;	font-size:16px;	font-weight:700;">
							We offer IT Product implementation and Digital Transformation Services for various
							industries across global. Our Solution helps the Business to Maximise Growth and Minimise
							the Risk.
						</p>
					</div>
					<div class="col-sm-1">

					</div>

					<div class="col-sm-3">
						<h4 class="footer_title"
							style="	color:#fff;	text-align:justify;	font-size:20px;	font-weight:800;">Our Office
						</h4>
						<p class="service_locations_grey"
							style="	color:#fff;	text-align:justify;	font-size:16px;	font-weight:700;">Unit A1 & A2,<br>
							Methuen Business Park, Chippenham - SN14 0GT<br>
							United
							Kingdom.</p>
						<p class="service_locations_grey">
							<a href="tel:020 3963 4380"
								style="color:#fff;	text-align:justify;	font-size:16px;	font-weight:700;"><i
									class="fas fa-phone-volume "></i><span> 020 3963 4380</span></a>
						</p>
						<p class="service_locations_grey">
							<a href="mailto:contact@vfinetune.com"
								style="	color:#fff;	text-align:justify;	font-size:16px;	font-weight:700;"><i
									class="fas fa-envelope "></i><span> contact@vfinetune.com</span></a>
						</p>
					</div>
					<div class="col-sm-1">

					</div>
				</div>
			</div>

			<div class="container-fluid no_padding copyright-background">
				<div class="container">
					<div class="row">
					<div class="col-sm-3 text-center">
                        <ol>
                            <li><a href="https://www.youtube.com/channel/UCMTJ_NOBh1TwYmBElzDNy5A " target="_blank"
							style="color:red"    ><i class="fab fa-youtube "></i></a></li>
                            <li><a href="https://x.com/vfinetuneltd" target="_blank" ><i
                                        class="fab fa-twitter "></i></a></li>
                            <li><a href="https://www.linkedin.com/company/vfinetune/" target="_blank">
                                    <i class="fab fa-linkedin-in "></i></a></li>
                        </ol>
                    </div>
						<div class="col-sm-6 text-center">
							<div class="copy_links">
								<p class="copyright_content">&copy; Copyrights 2024 by <a href="#">vfinetune Limited
									</a>
								</p>



							</div>
						</div>
						<div class="col-sm-3 text-right">
							<a href="https://vfinetune.com/"><img src="images/info_logo.png" class="img-fluid"
									style="width:100px;" alt="vfinetune"></a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Navbar ends -->

		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</body>

</html>