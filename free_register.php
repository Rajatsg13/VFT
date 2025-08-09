<?php 
	
	session_start();  
	

				

			
			
		
if(isset($_POST['submit']))
{
    
    
            $from = $_POST['email']; // this is the sender's Email address
            $first_name = $_POST['firstname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $product = $_POST['product'];
            $sub = $_POST['subject'];
   
           
            
   
                                    function clean_string($string)                                  
                                    {
                                        $bad = array("content-type","bcc:","to:","cc:","href");
                                        
                                        return str_replace($bad,"",$string);
                                    }
                                    $email_from="vfinetune";
                                    $email_subject = "Registered Successfully!!";
                                  
                                     $email_message = "Welcome to vFineTune Limited !!"."\n"." Thanks for Registration "."\n"." Get 10% offer for your free registration "."\n";
                                    
                                    $email_message1 = "vFineTune Limited !!\nStudent Details... \n";
                                    
                                    $email_message .= "Username : ".clean_string($first_name)."\n";

                                    $email_message .= "Email : ".clean_string($email)."\n";
                                    $email_message .= "Mobile : ".clean_string($mobile)."\n";
                                    $email_message .= "Course Name : ".clean_string($product)."\n";
                                    $email_message .= "Message : ".clean_string($sub)."\n";

                                    $email_message1 .= "Username : ".clean_string($first_name)."\n";

                                    $email_message1 .= "Email : ".clean_string($email)."\n";
                                    $email_message1 .= "Mobile : ".clean_string($mobile)."\n";
                                    $email_message1 .= "Course Name : ".clean_string($product)."\n";
                                    $email_message1 .= "Message : ".clean_string($sub)."\n";

                                   $email_message.="For Enquiry"."\n"."Contact Us : 8754172249, 8098333306, 04224952252";
                                   
                                   
                                    $headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" ;
                                    
                                    @mail($from, $email_subject, $email_message, $headers);
                                    
                                    @mail("samj@vfinetune.com", $email_subject, $email_message, $headers);
                                                         
                                    @mail("preethi@vfinetune.com", $email_subject, $email_message, $headers);

                                    @mail("dharani2vfinetune@gmail.com", $email_subject, $email_message1, $headers);
                                    @mail("karthikeyans2vfinetune@gmail.com", $email_subject, $email_message1, $headers);
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<title>Free Registration</title>


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
		function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var lblError = document.getElementById("lblError");
				if(document.getElementById("get_quote_email").value=="")
				{
					lblError.innerHTML = "Email is Required";
				}
					else{
						if (reg.test(emailField.value) == false) 
         {
					lblError.innerHTML = "Invalid Email.";
					document.getElementById("submit").disabled = true;

            return false;
        }
				else{
					lblError.innerHTML ="";
				}
			}
				
        return true;

}

function restrictAlphabets(e){
        var x=e.which||e.keycode;
        if((x>=48 && x<=57))
            return true;
        else
            return false;
    }
		function namerestrict(e){
        var x=e.which||e.keycode;
        if((x>=65 && x<=90)||(x>=97 && x<=122)||(x==32))
            return true;
        else
            return false;
    }
	
	
		function message(){
	

                                  
			var name =  document.getElementById("get_quote_name").value;
			var email = document.getElementById("get_quote_email").value;
			var mobile = document.getElementById("get_quote_mobile").value;

			var product = document.getElementById("get_quote_budget").value;
			var mess = document.getElementById("get_quote_desc").value;

			var submit =document.getElementById("submitid");

			if(name=="" || email=="" || mobile=="" || product=="" || mess=="")
			{
				submit.innerHTML = "*You're requested to enter all the fields";
				submit.style.color="red";

			}
			else{
				submit.innerHTML = "Thanks for Registration. Get 10% offer for your free registration ";
				
				submit.style.color="green";
				alert("Thanks for Registration..Get 10% offer for your free registration");
				
				//echo "dfdf";
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-979209242');
</script>

  </head>
  <body>
	
	<!-- Navbar starts -->
	<!-- Navbar starts -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light sc_nav_bg">
	<a class="navbar-brand" href="https://vfinetune.com"><img src="../images/info_logo.jpg" style="height:45px;" alt="" class="img-fluid"></a>	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">-->
		<!--<span class="navbar-toggler-icon"></span>-->
	 <!-- </button>-->
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		
		
		
	  </div>
	</nav>	
	<body>
	<body>
	
	<!-- Navbar starts -->
	<!-- Navbar starts -->
	<div class="enquiry_float_btn">
	</div>
	<div class="container-fluid sc_no_padding cm_header_bg"  style="background:url(../images/contact/contact.jpg);	background-size:cover;
	background-position:center center;" >
		<div class="container" >
		<br>
		<br>

		<br>

		<br>

			<h1 class="cm_title text-center" ><span>Free Registration for Stars Performer</span></h1>
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
			<div class="col-sm-6 col-xs-6 col-ls-6 col-md-6 mobile_view_none" style="margin-top:-45px;">
			<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
	     <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	  </ol>
	  <div class="carousel-inner">
	  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block" src="../images/contact/image1.jpg" alt="First slide" style="margin: auto;max-width: 80%;">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block" src="../images/contact/image2.jpg" alt="Second slide" style="margin: auto;max-width: 80%;">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block" src="../images/contact/image3.jpg" alt="Third slide" style="margin: auto;max-width: 80%;">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block" src="../images/contact/image4.jpg" alt="Fourth slide" style="margin: auto;max-width: 80%;">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block" src="../images/contact/image5.jpg" alt="Fifth slide" style="margin: auto;max-width: 80%;">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block" src="../images/contact/image6.jpg" alt="Sixth slide" style="margin: auto;max-width: 80%;">
	    </div>
			<div class="carousel-item">
	      <img class="d-block" src="../images/contact/image7.jpg" alt="Sixth slide" style="margin: auto;max-width: 80%;">
	    </div>
			<div class="carousel-item">
	      <img class="d-block" src="../images/contact/image8.jpg" alt="Sixth slide" style="margin: auto;max-width: 80%;">
	    </div>
	  </div>
	
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
    
		</div>
    </div>
  </div>
	
			<div class="col-sm-6 col-xs-6 col-ls-6 col-md-6">
		
			<form  action="" method="post" onsubmit="return true" >			
				<span id="submitid"></span>
					<div class="form-group form-element form-input">
						<input id="get_quote_name" name="firstname" class="form-element-field" onkeypress='return namerestrict(event)'  type="text" required/>
						<div class="form-element-bar"></div>
						<label class="form-element-label" for="get_quote_name">Name</label>
						<span id="namError" style="color: red"></span>

					</div>
					<div class="form-group form-element form-input">
						<input id="get_quote_email" name="email" class="form-element-field" onblur="validateEmail(this);" type="text" />
						<div class="form-element-bar"></div>

						<label class="form-element-label" for="get_quote_email">Email</label>
						<span id="lblError" style="color: red"></span>

					</div>
			
					<div class="form-group form-element form-input">
					<input id="get_quote_mobile" name="mobile" class="form-element-field" onkeypress='return restrictAlphabets(event)' maxlength="10" minlength="10" type="text" />
				<div class="form-element-bar"> </div>
						<label class="form-element-label" for="get_quote_mobile" >Mobile</label>
						<span id="mobilError" style="color: red"></span>

					</div>
			
					<div class="form-group form-element form-select">
						<select id="get_quote_budget"  name="product" class="required form-element-field">
							<option value="NLP Program with certification">NLP Program with certification</option>
							<option value="Advanced Communication with certification">Advanced Communication with certification</option>
							<option value="Website Development with certification">Website Development with certification</option>
							<option value="Web Application Development with certification">Web Application Development with certification</option>
							<option value="Mobile Application Development with certification">Mobile Application Development with certification</option>
							<option value="Manual Testing with certification">Manual Testing with certification</option>
							<option value="Automation Testing with certification">Automation Testing with certification</option>
							<option value="Cloud Computing with certification
 ">Cloud Computing with certification
 </option>
							<option value="Mean Stack Development">Mean Stack Development</option>
					  	<option value="" selected="selected" visible="false"></option> 

						</select>
						<div class="form-element-bar"></div>
						<label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Our Programs</label>
					</div>
			
					<div class="form-group form-element form-textarea">
						<textarea id="get_quote_desc" name="subject" class="form-element-field" placeholder=" "></textarea>
						<div class="form-element-bar"></div>
						<label class="form-element-label" for="get_quote_desc">Message</label>
					</div>
			
			<div class="row pad_top_30">
				<div class="col">
					<button id="submit" class="violet_pink_btn btn-md btn-block" style="border:none" name="submit" type="submit" onclick="message();">Submit</button>
				</div>
			</div>
			</form>
			</div>
			</div>

			
		</div>
		
	</div>
	

</body>

	<div class="section fp-auto-height fp-auto-height-responsive" id="section5">
		<div class="container">
			<div class="row footer_padding">
			<div class="col-sm-6">
			<h4 style="color:#fff;	font-size:18px;">About Us</h4>
			<p style="	color:#c1c4c7;	text-align:justify;	font-size:14px;	font-weight:300;
">
 vFineTune Limited global Information Technology, 
 Consulting and Business Process Automation Company. We harness the power 
 of Intelligence Automation, Cognitive computing, Cloud, Digital Quality Assurance,
 IoT Products, Analytics and Emerging technologies to help our clients adapt
 to the Digitalization of their Business solutions and make them successful.
 Our Value as a Service (VaaS) strive innovative solutions and a flexible
 engagement approach significance our customers stay ahead of the curve, 
 drive revenues, and enhance market position.

</p>
			</div>
			<div class="col-sm-3">
					
					
					 
					
					
				</div>
			
				<div class="col-sm-3">
				<h4 class="footer_title">Our Office</h4>
					<p class="service_locations_grey">Unit A1 & A2,<br> Methuen Park, Chippenham - SN14 0GT<br> United Kingdom.</p>
					<p class="service_locations_grey">contact@vfinetune.com</p>
				</div>
			</div>
		</div>
		
		<div class="container-fluid no_padding copyright-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
					<!--<ol >-->
					<!--<li><a href="https://www.facebook.com/vfinetune " target="_blank" style="color:white"><i class="fab fa-facebook-f social_white"></i></a></li>-->
					<!--<li><a href="https://twitter.com/search?f=tweets&q=vfinetune" target="_blank" style="color:white"><i class="fab fa-twitter social_white"></i></a></li>-->

					<!--<li><a href="https://www.instagram.com/vfinetune/" target="_blank" style="color:white"><i class="fab fa-linkedin-in social_white"></i></a></li>-->


					
 				<!--	</ol>-->
					</div>
					<div class="col-sm-6 text-center">
						<div class="copy_links">
														<p class="copyright_content">&copy; Copyrights 2024 by <a href="#">vfinetune Limited </a></p>



						</div>
					</div>
					<div class="col-sm-3 text-right">
														<a href="https://vfinetune.com"><img src="../images/info_logo.jpg" class="img-fluid" style="width:140px;height:40px;margin-top:10px" alt="vfinetune"></a>
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