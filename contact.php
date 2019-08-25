<!DOCTYPE html>
<html lang="en">
<body>

<?php include 'header.php';?>


  <header class="bg-secondary text-warning text-center py-4 mb-4">
    <h1 class="font-weight-light text-white">Contact Us</h1>
    <div class="bread-text">
    <a href="hstl.html" class="font-weight-light  text-white">Home </a><i class="fas fa-arrow-right text-white"></i> Contact Us
  </div>
</header>

<div class="col-md-12 p-0">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689201412!2d85.29111313454997!3d27.70903193365019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1559553476344!5m2!1sen!2snp" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><br> 

<section class="Material-contact-section section-padding section-dark">
      <div class="container bgi">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">Love to Hear From You</h1>
              </div>
          </div>
          <div class="row">
             
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name:</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name" placeholder="Name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email:</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email" placeholder="Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject:</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject" placeholder="Subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Phone no.:</label>
                        <input class="form-control" id="msg_subject" type="number" name="subject" required data-error="Please enter your message subject" placeholder="Phone">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message:</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn bg-secondary" type="submit" id="form-submit" ><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>

 <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

                <div class="find-widget">
                 Company:  <a href="https://hostriver.ro">School</a>
                </div>
                <div class="find-widget">
                 Address: <a href="#">Kathmandu</a>
                </div>
                <div class="find-widget">
                  Phone:  <a href="#">+9779814834935</a>
                </div>
                
                <div class="find-widget">
                  Website:  <a href="https://uny.ro">www.school.edu.np</a>
                </div>
                <div class="find-widget">
                   Program: <a href="#">Sun to Fri: 09:30 AM - 10.30 PM</a>
                </div>
              </div>

          </div>
      </div>
    </section><br>






<?php include 'footer.php';?>





</body>
</html>