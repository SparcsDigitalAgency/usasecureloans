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
                        <form class="contact1-form validate-form" name="phpformmailer" action="contact_process.php" method="post">
                            <h2 class="contact1-form-title text-center">Get In Touch</h2>

                            <div class="wrap-input1 validate-input" data-validate="Name is required">
                                <input class="input1" type="text"  name="name" placeholder="Name">
                                <input type="hidden" name="block_spam_bots" value="1">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input1" type="text" name="email" placeholder="Email">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                                <input class="input1" type="text" name="thesubject" placeholder="Subject">
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="wrap-input1 validate-input" data-validate="Message is required">
                                <textarea class="input1" name="themessage" placeholder="Message"></textarea>
                                <span class="shadow-input1"></span>
                            </div>

                            <div class="container-contact1-form-btn">
                                <button class="contact1-form-btn" type="button" value="Send" name="B1" ONCLICK="javascript:validatecontactForm()">
                                    <span>
                                        Send Message
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php include_once('partials/form-section.php')?>
            </div>
        </div>
        
    </section>
    
    
<?php include_once('partials/footer.php')?>