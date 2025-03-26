<?php
include('header.php')
?>

<br>
<br>
      <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Contact Us</h2>
                  </div>
               </div>
               <div class="col-md-6">
                  <form class="main_form" method="post" action="mail.php">
                     <div class="row">
                        <div class="col-md-6 ">
                           <input class="contactus" placeholder="Name*" id="Name" name="Name" required> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone Number*" id="PhoneNumber" name="PhoneNumber" required>                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email*" id="Email" name="Email" required>                          
                        </div>
                        <div class="col-md-12 select-outline">
                           <select class="custom-select " name="type">
                              <option selected>Select Subject*</option>
                              <option value="STEM Training">STEM Training</option>
                              <option value="Arts and Crafts">Arts and Crafts</option>
                              <option value="Gaming">Gaming</option>
                              <option value="Web Designing">Web Designing</option>
                              <option value="English Master">English Master</option>
                              <option value="Magic of Science">Magic of Science</option>
                              <option value="Magic Of Maths">Magic Of Maths</option>
                              <option value="Robotics">Robotics</option>
                           </select>
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" name="message" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" name="send" type="submit">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.1213850261865!2d76.30183027436024!3d10.006831090098908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080dd266e873f1%3A0x9c3fc636d2d28249!2sNextGenPro%20Data%20Science%20%2C%20Full%20Stack%20%2C%20Flutter%20Development%20Company!5e0!3m2!1sen!2sin!4v1724661836708!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->
      <?php
      include('footer.php')
      ?>