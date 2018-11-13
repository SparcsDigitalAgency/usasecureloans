<footer class="footer">
   <div class="container bottom_border">
      <div class="row">
         <div class=" col-sm-6 col-md-3">
            <!-- <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
               headin5_amrc
               
               <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
               <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
               <p><i class="fa fa fa-envelope"></i> info@example.com  </p> -->
            <img src="<?php echo $path; ?>images/logo-white.png" class="white-logo">
            <p class="mb10">Here at USASecureLoans.com, We connect you with one of several lenders in our network who can provide you with access to the emergency funds you need, regardless of the reason. We can help you find loans of up to $1,000 without any Hassle.</p>
         </div>
         <div class=" col-sm-6 col-md-3">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
               <li><a href="">Marketing Practices</a></li>
               <li><a href="">How It Works?</a></li>
               <li><a href="">Blog</a></li>
               <li><a href="">Contact</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
         </div>
         <div class=" col-sm-6 col-md-3">
            <h5 class="headin5_amrc col_white_amrc pt2">Information links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
               <li><a href="">Rates & Fess</a></li>
               <li><a href="">Terms & Conditions</a></li>
               <li><a href="">Privacy Policy</a></li>
               <li><a href="">FAQ's</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
         </div>
         <div class=" col-sm-6 col-md-3">
            <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
            <!--headin5_amrc ends here-->
            <ul class="footer_ul2_amrc">
               <li>
                  <button type="button" class="btn btn-sm btn-fb " style="margin-bottom: 10px;"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
               </li>
               <li>
                  <button type="button" class="btn btn-sm btn-tw "><i class="fab fa-facebook-f pr-1"></i> Twitter</button>
               </li>
            </ul>
            <!--footer_ul2_amrc ends here-->
         </div>
      </div>
   </div>
   <div class="container">
   <ul class="foote_bottom_ul_amrc">
      <li><a href="<?php echo $path; ?>index">Home</a></li>
      <li><a href="<?php echo $path; ?>blog"">Blog</a></li>
      <li><a href="<?php echo $path; ?>contact"">Contact</a></li>
   </ul>
   <!--foote_bottom_ul_amrc ends here-->
   <p class="text-center">2014 © Copyright USASecureLoans.com</a></p>
</footer>
<!--Vendor-JS-->
<script type="text/javascript">
   function main_page_form_submit(){
    if(!jQuery('#consent').is(':checked'))
    {
        jQuery('#consent_title').addClass('error');
        return false;
    }else{
        return true;
    }
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24740586-2', 'auto');
  ga('send', 'pageview');

</script>

 <script language="JavaScript"><!--
function validatecontactForm() 
{
 var okSoFar=true
 with (document.phpformmailer)
 {
  var foundAt = email.value.indexOf("@",0)
   if (name.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter your name.")
    name.focus()
  }
  if (foundAt < 1 && okSoFar)
  {
    okSoFar = false
    alert ("Please enter a valid email address.")
    email.focus()
  }
 
  if (thesubject.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter your subject.")
    thesubject.focus()
  }
  if (themessage.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter the details for your enquiry.")
    themessage.focus()
  }
  if (okSoFar==true)  
  {
   block_spam_bots.value=4*3;//spam bots currently can not read JavaScript, if could then they'd fail the maths!
   submit();                  // do check for updatea often at:  www.TheDemoSite.co.uk 
  } 
 }
}
// --></script>


<script language="JavaScript"><!--
function validateForm() 

{
  var okSoFar=true
 
  with (document.ShortForm){
    
  //document.getElementById("First-Name").classList.remove("errorTextBox")
  //document.getElementById("Zip").classList.remove("errorTextBox")
  document.getElementById("EmailID").classList.remove("errorTextBox")
  
  
  //var foundAt     = Email.value.indexOf("@",0)
  var emailPattern  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
  var termscheck    = document.getElementById("consent")
  var consemtTitle  = document.getElementById("consent_title")
  
 
   if (FirstName.value=="" || FirstName.value=="FirstName")
  {
    okSoFar=false
  document.getElementById("First-Name").classList.add("errorTextBox")
  }
  
   /*
  
 if (foundAt.value=="" || foundAt < 1)
  {
    okSoFar = false
    document.getElementById("EmailID").classList.add("errorTextBox")
  }

  if (ZipCode.value=="" || ZipCode.value=="Zip" )
  {
    okSoFar=false
    document.getElementById("Zip").classList.add("errorTextBox")
  }
  */
  
    if(Email.value=='' || Email.value=='Email' || !emailPattern.test(Email.value))
      {
        okSoFar = false
      document.getElementById("EmailID").classList.add("errorTextBox")
    }
   
    if(termscheck.checked == false)
      {
        okSoFar=false
        consemtTitle.classList.add("error")
      }
    
    if (okSoFar==true)  
      {
        submit();
      } 
 }
}
// --></script>




<script src="<?php echo $path; ?>js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo $path; ?>js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="<?php echo $path; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo $path; ?>js/contact-form.js"></script>
<script src="<?php echo $path; ?>js/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo $path; ?>js/scrollUp.min.js"></script>
<script src="<?php echo $path; ?>js/magnific-popup.min.js"></script>
<script src="<?php echo $path; ?>js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="<?php echo $path; ?>js/main.js"></script>

<?php if ($contact): ?> 
   <script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 


        //get input field values
        var subject         = $('input[name=subject]').val(); 
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()

       

        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
         if(subject==""){ 
            $('input[name=subject]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'subject':subject,'userName':user_name, 'userEmail':user_email, 'userMessage':user_message};
            
         //Ajax loading gif
         $("#dvloader").show();
         
            //Ajax post data to server
            $.post('contact_me', post_data, function(response){ 
         
         $("#dvloader").hide(); 

                //load json data from server and output message     
            if(response.type == 'error')
            {
               output = '<div class="error">'+response.text+'</div>';
            }else{
                output = '<div class="success">'+response.text+'</div>';
               
               //reset values in all input fields
               $('#contact_form input').val(''); 
               $('#contact_form textarea').val('');
                     
                    //window.location.replace("./thank-you");
            }
            
            $("#result").hide().html(output).slideDown();

            }, 'json');

            
         
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    return false;
});
</script> 
<?php endif; ?>

</body>
</html>