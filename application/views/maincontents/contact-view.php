<!-- GRID -->
<div class="page-block-inner">
                    <h3>Find Us</h3>
                    <p>Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi tempor, cillum ex aut aliqua mandaremus in ex legam magna noster ullamco.</p>
                    <!-- GOOGLE MAP -->
                    <div class="flex-video google-map">
                        <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=new+york&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed&amp;iwloc=near"></iframe>
                    </div>
                    <p class="info-bar"><strong>Address:</strong> 30/2/1, Kali Charan Durra Road<br>Behala, Shakherbazar<br>Kolkata 700 061</p>
                    <br/>
                    <p class="info-bar"><strong>Phone:</strong> +91 9830 488 597</p>
                    <br/>
                    <p class="info-bar"><strong>Email:</strong> rajeshcaravan11@gmail.com</p>
                    <hr/>
                    <h3>Get In Touch</h3>
                    <p>E fugiat mentitum illustriora, te noster tractavissent. Eu aute occaecat domesticarum id si quem non enim. Ab velit nisi si commodo ne dolor domesticarum quamquam malis officia, et legam laboris ne qui cupidatat qui singulis, fabulas.</p>
                    <!-- CONTACT FORM -->
                    
                    <!--<div class="alert alert-success hidden" id="contactSuccess">
                            <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger hidden" id="contactError">
                            <strong>Error!</strong> There was an error sending your message.
                    </div>-->
                    
                    <form class="form-box" action="<?php echo base_url(); ?>home/enquiry" method="post" id="contactForm">
                    	
                        <label>Full name :</label>
                        <input type="text" name="senderName" id="senderName" required maxlength="50" />
                        <label>Phone Number :</label>
                        <input type="text" name="phoneNumber" id="phoneNumber" required maxlength="50" />
                        <label>Email address :</label>
                        <input type="email" name="senderEmail" id="senderEmail" required maxlength="50" />
                        <label>Message :</label>
                        <textarea name="message" id="message" required></textarea>
                        <input type="submit" id="sendMessage" name="submit" class="button" value="Send Message" />
                        
                        <!--<button type="submit" class="button" id="sendMessage" name="sendMessage">Send message</button>-->
                        
                    </form>
                </div>
       
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
     $("#contactForm").submit(function() {

         name = $('#senderName').val();
         email = $('#senderEmail').val();
         phone = $('#phoneNumber').val();
         message = $('#sendMessage').val();

         var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&message=' + message;

         //alert (dataString);return false;
         $.ajax({
             type: "POST",
             url: "ajax_call/enquiry",
             data: dataString,
             success: function() {
                 $("#contactForm").animate({opacity:'1'}, 500);
                 $('.loader').hide();
                 $("<div id='success' class='alert alert-success' style='border:#"+successBox_Border_Color+" 1px "+successBoxBorderStyle+"; background:#"+successBoxColor+";' ></div>").insertAfter('#contactForm');
                 $('#contactForm').slideUp(300);
                 $('#success').html("<h5 style='color:#"+textColor+";'>"+submitMessage+"</h5><p style='color:#"+textColor+";'>"+successParagraph+"</p>")
                     .hide().delay(300)
                     .fadeIn(1500);
             }
         });
     });
 </script>-->