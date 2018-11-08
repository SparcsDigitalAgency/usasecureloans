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
    <header class="header-area overlay  relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2 class="wow fadeInLeft">Get lender approval<br> as soon as tomorrow </h2>
                    <p class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis tempora numquam.</p>
                    <a href="<?php echo $path; ?>form.php" class="button white wow fadeInLeft">Get Started</a>
                </div>
                <div class="col-lg-4 text-right" style="margin-left: auto;">
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
                             By submitting your information, you acknowledge you have read, understand, and agree to the terms of our <a href="<?php echo $path; ?>privacy.php" target="_blank" style="color: #444">Privacy Policy</a> and <a href="<?php echo $path; ?>terms.php" target="_blank" style="color: #444">Disclaimer</a>.</span>
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
    </header>
    <!--Header-area/-->

    
    <section class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box  wow fadeInUp">
                            <div class="box-icon"><img src="images/time-left.svg"></div>
                            <h3 class="title">Quick & Easy</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box wow fadeInUp">
                            <div class="box-icon"><img src="images/cash.svg"></div>
                            <h3 class="title">Upto $1000 Cash!</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box wow fadeInUp">
                            <div class="box-icon"><img src="images/shield.svg"></div>
                            <h3 class="title">Fast & Secure!</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box wow fadeInUp">
                            <div class="box-icon"><img src="images/lightning.svg"></div>
                            <h3 class="title">Get Fast Cash!</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="disclaimer wow fadeInUp">
                            <p>Disclaimer: We are not connected with or endorsed by the U.S. government.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section3">
            <div class="container">
                <div class="section-title wow fadeInUp">
                    <h3>Process Steps</h3>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 process">
                        <div class="process-step wow fadeInUp">
                            <figure class="process-icon">
                                <img src="images/process-icons/1.png" alt="#">
                            </figure>
                            <h4>start for <br>a loan</h4>
                            <p> Start at this page to complete your application in minutes.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 process">
                        <div class="process-step wow fadeInUp">
                            <figure class="process-icon">
                                <img src="images/process-icons/2.png" alt="#">
                            </figure>
                            <h4>Loan <br>approval</h4>
                            <p> We will Quickly try to find a lender based upon your requirements. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 process">
                        <div class="process-step wow fadeInUp">
                            <figure class="process-icon">
                                <img src="images/process-icons/3.png" alt="#">
                            </figure>
                            <h4>Connect <br>with lenders</h4>
                            <p> You will be redirected to lender's website to review loan terms and conditions.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 process">
                        <div class="process-step wow fadeInUp">
                            <figure class="process-icon">
                                <img src="images/process-icons/4.png" alt="#">
                            </figure>
                            <h4>get cash <br>in the bank</h4>
                            <p> If you agree to loan terms, you'll receive the cash in your bank account next day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <section class=" section4">
            <div class="area-bg" data-stellarr-ratio="0.6"></div>
                <div class="container">
                    <div class="row ">
                        <div class="col-md-5 col-lg-5 col-md-offset-7 col-lg-offset-7 col-sm-12 col-xs-12">
                            <div class="video-area-content padding-50-50 white wow fadeInRight" >
                                <h2>What Is USASecureLoans.com?</h2>
                                <p>Here at USASecureLoans.com, We connect you with one of several lenders in our network who can provide you with access to the emergency funds you need, regardless of the reason. We can help you find loans of up to $1,000 without any Hassle.</p>
                                <h2>Why USASecureLoans.com?</h2>
                                <div class="points-list">
                                   <div class="icon"><i class="fa fa-check-circle"></i></div>
                                   <p class="description">Connect with one of multiple lenders through one simple form above that takes few minutes to complete.</p>
                                </div>
                                <div class="points-list">
                                   <div class="icon"><i class="fa fa-check-circle"></i></div>
                                   <p class="description">This application form is protected with a secured SSL technology.</p>
                                </div>
                                <div class="points-list">
                                   <div class="icon"><i class="fa fa-check-circle"></i></div>
                                   <p class="description">You may be approved fast and get up to $1000 cash you need ASAP!</p>
                                </div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-sm btn-fb "><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                                    <span class="counter">22</span>
                                    <button type="button" class="btn btn-sm btn-tw "><i class="fab fa-twitter pr-1"></i> Twitter</button>
                                    <span class="counter">22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="section5">
            <div class="container">
                <div class="section-title wow fadeInUp">
                    <h3>Connect with one of multiple lenders through one simple form.</h3>
                    <button type="button" class="btn btn-cash wow fadeInUp"><i class="fas fa-user-lock "></i> GET YOUR CASH</button>
                </div>
                <div class="row notice">
                    <div class="content customer-notice-wrap">
                        <div class="inner customer-notice wow fadeInUp">
                                <h3>The standard Lorem Ipsum passage, used since the 1500s</h3><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p><h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                <h3>1914 translation by H. Rackham</h3>
                                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                                <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                                <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
                                <h3>1914 translation by H. Rackham</h3>
                                <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
                        </div>
                     </div>
                </div>
            </div>
        </section>


<?php include_once('partials/footer.php')?>