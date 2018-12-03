<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="msvalidate.01" content="94E941D18450CDFE67C4D29C89FCDAFF" />
<title>USASecureLoans.com | Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content=" ">
<meta name="description" content="No credit check! Approval takes only seconds. You are minutes away from getting the Cash you need!">
<meta content="index,follow" name="Robots" />
<link href="script/format.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/usl.ico">

<meta property="og:title" content="USASecureLoans.com | Contact Us" />
<meta property="og:type" content="company" />
<meta property="og:url" content="https://www.usasecureloans.com" />
<meta property="og:site_name" content="USA Secure Loans" />
<meta property="fb:admins" content="1301551246" />

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link href="script/mobile.css" rel="stylesheet" type="text/css" /><script type="text/javascript">

function main_page_form_submit(){
    if(!jQuery('#consent').is(':checked'))
    {
        jQuery('#consent_title').addClass('error');
        return false;
    }else{
        return true;
    }
}
</script></head>


<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24740586-2', 'auto');
  ga('send', 'pageview');

</script>





<div id="top-wrapper">
<div id="centered-wrapper">

<h1 class="logo"><a href="https://www.usasecureloans.com/" title="USASecureLoans.com">USASecureLoans.com</a></h1>


<nav class="main-nav">
<ul>
<li class="current"><a href="#" title="MENU">MENU</a></li>



<li><a href="faq.html" title="Faq's">Faq's</a></li>
<li><a href="rates.html" title="Rates">Rates</a></li>
<li><a href="terms.html" title="Terms">Terms</a></li>
<li><a href="privacy.html" title="Privacy">Privacy</a></li>
<li><a href="contact.html" title="Contact">Contact</a></li>
<li><a href="https://www.usasecureloans.com/blog/" title="Blog">Blog</a></li>
</ul>
</nav>


</div>
</div><!--top-wrapper-->






<header id="header">
<div id="inner-header">
<h1>Get lender approval as soon as tomorrow </h1>
<h2>Confidential & Secure! - Fast and Easy Form - Fast Loan Match</h2>
</div>
</header><!--header-->













<section id="wrapper">
<div id="inner-wrapper">

<aside id="wrapper-left">



<?php
/* PHP Form Mailer - easy, secure form mail:
  phpFormMailer v2.6

 last updated 2nd Dec 2009 - check back often for updates!
     (easy to use and more secure than many cgi form mailers) FREE from:

                  www.TheDemoSite.co.uk

      Should work fine on most Unix/Linux platforms
      for a Windows version see: asp.thedemosite.co.uk
*/

// ------- three variables you MUST change below  -------------------------------------------------------
$replyemail="admin@usasecureloans.com"; //change to your email address
$valid_ref1="https://www.usasecureloans.com/contact.html"; //chamge to your domain name
$valid_ref2="https://www.usasecureloans.com/contact.html"; //chamge to your domain name

// -------- No changes required below here -------------------------------------------------------------
//
// email variable not set - load $valid_ref1 page
if (!isset($_POST['email']))
{
 echo "<script language=\"JavaScript\"><!--\n ";
 echo "top.location.href = \"$valid_ref1\"; \n// --></script>";
 exit;
}
$ref_page=$_SERVER["HTTP_REFERER"];
$valid_referrer=0;
if($ref_page==$valid_ref1) $valid_referrer=1;
elseif($ref_page==$valid_ref2) $valid_referrer=1;
if((!$valid_referrer) OR ($_POST["block_spam_bots"]!=12))//you can change this but remember to change it in the contact form too
{
 echo '<h2>ERROR - not sent.';
 if (file_exists("debug.flag")) echo '<hr>"$valid_ref1" and "$valid_ref2" are incorrect within the file:<br>
                                      contact_process.php <br><br>On your system these should be set to: <blockquote>
                                                                          $valid_ref1="'.str_replace("www.","",$ref_page).'"; <br>
                                                                          $valid_ref2="'.$ref_page.'";
                                                                          </blockquote></h2>Copy and paste the two lines above
                                                                          into the file: contact_process.php <br> (replacing the existing variables and settings)';
 exit;
}

//check user input for possible header injection attempts!
function is_forbidden($str,$check_all_patterns = true)
{
 $patterns[0] = '/content-type:/';
 $patterns[1] = '/mime-version/';
 $patterns[2] = '/multipart/';
 $patterns[3] = '/Content-Transfer-Encoding/';
 $patterns[4] = '/to:/';
 $patterns[5] = '/cc:/';
 $patterns[6] = '/bcc:/';
 $forbidden = 0;
 for ($i=0; $i<count($patterns); $i++)
  {
   $forbidden = preg_match($patterns[$i], strtolower($str));
   if ($forbidden) break;
  }
 //check for line breaks if checking all patterns
 if ($check_all_patterns AND !$forbidden) $forbidden = preg_match("/(%0a|%0d|\\n+|\\r+)/i", $str);
 if ($forbidden)
 {
  echo "<font color=red><center><h3>STOP! Message not sent.</font></h3><br><b>
        The text you entered is forbidden, it includes one or more of the following:
        <br><textarea rows=9 cols=25>";
  foreach ($patterns as $key => $value) echo trim($value,"/")."\n";
  echo "\\n\n\\r</textarea><br>Click back on your browser, remove the above characters and try again.
        </b><br><br><br><br>Thankfully protected by phpFormMailer freely available from:
        <a href=\"http://thedemosite.co.uk/phpformmailer/\">http://thedemosite.co.uk/phpformmailer/,</a>";
  exit();
 }
}

foreach ($_REQUEST as $key => $value) //check all input
{
 if ($key == "themessage") is_forbidden($value, false); //check input except for line breaks
 else is_forbidden($value);//check all
}


$name = $_POST["name"];
$email = $_POST["email"];
$thesubject = $_POST["thesubject"];
$themessage = $_POST["themessage"];

$success_sent_msg='
                   <h2>Thank you for contacting us.</h2>
				   <h3>Your message has been successfully sent to us and we will reply as soon as possible.</h3>';

$replymessage = "Hi $name

Thank you for your email.

We will endeavour to reply to you shortly.

Please DO NOT reply to this email.

Below is a copy of the message you submitted:
----------------------------------------------------------------------------------------------------------------------------------------------------------
Query:
$themessage
----------------------------------------------------------------------------------------------------------------------------------------------------------

Thank you";

$themessage = "
Enquiry From: $name | $email
-----------------------------------------------------------------------------
$themessage
";
mail("$email",
     "Receipt: [USASecureLoans.com]",
     "$replymessage",
     "From: $replyemail\nReply-To: $replyemail");
mail("$replyemail",
     "[USASecureLoans.com] $thesubject ",
     "$themessage",
     "From: $email\nReply-To: $email");
echo $success_sent_msg;
/*
  PHP Form Mailer - phpFormMailer (easy to use and more secure than many cgi form mailers)
   FREE from:

    www.TheDemoSite.co.uk       */
?>




</aside><!--wrapper-left-->




<aside id="wrapper-right"> 
<div id="rightform">
<h1>Up to $1000 Cash</h1>
<form action="https://www.usasecureloans.com/payday-loan.html" method="get" onSubmit='return main_page_form_submit()'> 

<p> 	  
<select size="1" onchange=""  name="RequestedAmount" class="select" tabindex="1">

<option value="">Select Loan Amount</option>
<option value="100">$100</option>
<option value="200">$200</option>
<option value="300">$300</option>
<option value="400">$400</option>
<option selected="selected" value="500">$500 or more</option>
</select>
</p>
<p>
<input class="text" type="text" name="FirstName"  value="First Name" onfocus="if(this.value == 'First Name') this.value = '';" onblur="if(this.value=='') this.value='First Name';"/>
</p>
<p>
<input class="text" type="text" name="Email"  value="Email" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';"/>
</p>
<p>
<input class="text" type="text" name="ZipCode"  value="Zip" onfocus="if(this.value == 'Zip') this.value = '';" onblur="if(this.value=='') this.value='Zip';"/>
</p>


<p class="terms">
<input type="checkbox" name="consent" id="consent" onchange="if(jQuery(this).is(':checked')){jQuery('#consent_title').removeClass('error');}"/>
<span id="consent_title" >
 By submitting your information, you acknowledge you have read, understand, and agree to the terms of our <a href="privacy.html" target="_blank" >Privacy Policy</a> and <a href="disclaimer.html" target="_blank" >Disclaimer</a></a>.</span></p>
	 
<input type="submit" value="Get Your Cash" class="submit-btn"  title="Get Your Cash"/>      
</form>



</div><div id="sec-ico">
<div><img src="images/antivirus.jpg" alt="Antivirus Safe"><span><strong>ANTIVIRUS </strong>Safe</span></div>
<div><img src="images/256-bit.jpg" alt="256 Bit Secure"><span><strong>256 bit</strong>Secure</span></div>
</div><!--top-icons-->
<div class="clear"></div>




</aside><!--wrapper-right-->







<div class="clear"></div>
</div><!--inner-wrapper-->
</section><!--wrapper-->


















<footer id="footer">
<div id="footerin">


<div class="footer-txt">
This matching service is not be available in all states. Available loan amounts vary from lender to lender. There is no guarantee that by completing this form a loan will be provided. The operator of this website and of this form is NOT A LENDER, is not a broker, agent or representative, does not make credit or lending decisions, and does not charge consumers any fees. Your request may be verified with independent verification companies. Please direct your questions or concerns about your loan to your lender. Disclosures of APR, fees and payment terms are provided by the lender in the Loan Agreement once your request is received and matched. Please use Short Term Advance Loans responsibly. This product is intended as a short term emergency loan, it is not a lasting solution to long term financial difficulties. To improve your overall financial situation consider these <a href='http://www.ftc.gov/bcp/edu/pubs/consumer/general/gen18.pdf' target='_blank'>financial planning</a> and <a href='http://www.ftc.gov/bcp/edu/pubs/consumer/general/gen14.pdf' target='_blank'>money saving</a> tips.
</div>



  <ul id="footerbox">
  
                             <li>
                             <ul>
                             <li><a href="marketing-practices.html" title="Marketing Practices">Marketing Practices</a></li>
                             <li><a href="how-it-works.html" title="HOW IT WORKS">How it works</a></li>
                             <li><a href="https://www.usasecureloans.com/blog/" title="Blog">Blog</a></li>
                             <li><a href="contact.html" title="CONTACT">Contact</a></li>
                             </ul>
                             </li>
                             
                             
                             <li>
                             <ul>
                             <li><a href="rates.html" title="RATES &amp; FEES">Rates &amp; Fees</a> </li>
                             <li><a href="terms.html" title="TERMS &amp; CONDITIONS">Terms &amp; CondItions</a></li>
                             <li><a href="privacy.html" title="PRIVACY POLICY">Privacy policy</a> </li>
                             <li><a href="faq.html" title="FAQ's">Faq's</a> </li>
                             </ul>
                             </li>
                             
                             
                             <li>
                             <ul>
                             <li><span id="flogo"></span>2013 &copy; Copyright USASecureLoans.com</li>
                             <li class="facebook-ico"><a href="https://www.facebook.com/USA-Secure-Loans-190968284293504/" target="_blank" title="Facebook like us">Like us</a></li> 
                             </ul>
                             </li>
                            
                           
  

  </ul><!--footer-box-end--> 
  
<div style="clear:both;"></div>
   
   
</div><!--footerin-end-->
</footer><!--footer-->



</body>
</html>