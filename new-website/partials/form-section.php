<div class="col-lg-4" style="margin-left: auto;">
                    <div class="hand-mockup text-lg-left text-center wow fadeInRight">
                        <form class="bg-white us-form" action="<?php echo $path; ?>paydayloan" method="get" name="ShortForm">
                          <h2 class="mb-4 mt-0 text-center">Get Started</h2>
                          <div class="form-group">
                            <div class="pb_select-wrap">
                              <select  size="1" onchange=""  name="RequestedAmount" tabindex="1" class="form-control pb_height-50 reverse">
                                <option value="" selected="">Select Loan Amount</option>
                                <option value="100">$100</option>
                                <option value="200">$200</option>
                                <option value="300">$300</option>
                                <option value="400">$400</option>
                                <option value="500" >$500</option>
                                <option value="600">$600</option>
                                <option value="700">$700</option>
                                <option value="800">$800</option>
                                <option value="900">$900</option>
                                <option value="1000">$1000</option>
                                
                                <option value="">$100</option>
                                <option value="">$200</option>
                                <option value="">$300</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <input  class="form-control pb_height-50 reverse" type="text" placeholder="First name" name="FirstName" id="First-Name" value="FirstName" onfocus="if(this.value == 'FirstName') this.value = '';" onblur="if(this.value=='') this.value='FirstName';"/>
                          </div>
                          <div class="form-group">
                            <input  class="form-control pb_height-50 reverse" placeholder="Email" type="text" name="Email"  value="Email" id="EmailID" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control pb_height-50 reverse" placeholder="Zip" type="text" name="ZipCode"  value="Zip" id="Zip" onfocus="if(this.value == 'Zip') this.value = '';" onblur="if(this.value=='') this.value='Zip';"/>
                          </div>
                          <div>
                            <p class="terms">
                            <input type="checkbox" name="consent" id="consent" onchange="if(jQuery(this).is(':checked')){jQuery('#consent_title').removeClass('error');}">
                            <span id="consent_title">
                             By submitting your information, you acknowledge you have read, understand, and agree to the terms of our <a href="<?php echo $path; ?>privacy" target="_blank">Privacy Policy</a> and <a href="<?php echo $path; ?>terms" target="_blank">Disclaimer</a>.</span>
                            </p>
                          </div>
                          <div class="form-group">
                            <input type="button" value="Get Your Cash" ONCLICK="javascript:validateForm()" class="btn btn-primary btn-md btn-block pb_btn-pill  btn-shadow-blue" value="Get Your Cash">
                            
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