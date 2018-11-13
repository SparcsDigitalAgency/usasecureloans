<!-- header -->
<?php 

   $meta_tags=array(
         'title'        => 'USA Secure Loans ',
      'description'  => '',
      'keywords'=>'',
      "no-index" => true,
      'no-follow' =>true,
      'no-archieve' =>true,

   );

include_once('partials/header.php')

?>



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center low-height-header" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-12 header-text">
                    <h1 class="wow fadeInLeft">Contact Us</h1>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->
    
    <section class="contact_section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container-contact1">
                        <form class="contact1-form validate-form" id="contact_form" style="border:none;"  >
                            <h2 class="contact1-form-title text-center">Get In Touch</h2>
                            <div id="result"></div>
                            <div class="wrap-input1 validate-input">
                                <input type="text" class="input1"  name="name" placeholder="Full Name" required>
                            </div>

                            <div class="wrap-input1 validate-input">
                                <input type="text" class="input1"  name="email" placeholder="Email Address" required>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                                <input type="text" class="input1"  name="subject" placeholder="Subject" required>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Message is required">
                                <textarea class="input1" name="message"  placeholder="Ok, Let's Talk" maxlength="140" rows="7"></textarea>
                            </div>

                            <div class="container-contact1-form-btn">
                                <button class="contact1-form-btn" type="button" id="submit_btn" >
                                    <span>
                                        Send Message
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </button>
                                <div style="display:none; float:left; margin:5px;" id="dvloader"><img src="images/ajax-loader.gif" /></div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php include_once('partials/form-section.php')?>
            </div>
        </div>
        
    </section>
    
    
<?php include_once('partials/footer.php')?>