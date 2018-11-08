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
                        <form class="contact1-form validate-form">
                            <h2 class="contact1-form-title text-center">Get In Touch</h2>

                            <div class="wrap-input1 validate-input" data-validate="Name is required">
                                <input class="input1" type="text" name="name" placeholder="Name">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input1" type="text" name="email" placeholder="Email">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                                <input class="input1" type="text" name="subject" placeholder="Subject">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Message is required">
                                <textarea class="input1" name="message" placeholder="Message"></textarea>
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="container-contact1-form-btn">
                                <button class="contact1-form-btn">
                                    <span>
                                        Send Message
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hand-mockup text-lg-left text-center wow fadeInRight">
                        <form action="#" class="bg-white us-form">
                          <h2 class="mb-4 mt-0 text-center">Get Started</h2>
                          <div class="form-group">
                            <div class="pb_select-wrap">
                              <select class="form-control pb_height-50 reverse">
                                <option value="" selected="">Select Loan Amount</option>
                                <option value="">$100</option>
                                <option value="">$200</option>
                                <option value="">$300</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="First name">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="Zip">
                          </div>
                          <div>
                            <p class="terms">
                            <input type="checkbox" name="consent" id="consent" onchange="if(jQuery(this).is(':checked')){jQuery('#consent_title').removeClass('error');}">
                            <span id="consent_title">
                             By submitting your information, you acknowledge you have read, understand, and agree to the terms of our <a href="<?php echo $path; ?>privacy.php" target="_blank">Privacy Policy</a> and <a href="<?php echo $path; ?>terms.php" target="_blank">Disclaimer</a>.</span>
                            </p>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-md btn-block pb_btn-pill  btn-shadow-blue" value="Get Your Cash">
                          </div>
                          <div class="sec-ico">
                            <div>
                                <img src="<?php echo $path; ?>images/protected.png" alt="Antivirus Safe"><span><strong>ANTIVIRUS </strong>Safe</span>
                            </div>
                            <div>
                                <img src="<?php echo $path; ?>images/locked.png" alt="256 Bit Secure"><span><strong>256 bit</strong>Secure</span>
                            </div>
                          </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    
<?php include_once('partials/footer.php')?>