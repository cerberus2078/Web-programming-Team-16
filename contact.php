<?php include "header.php" ?>

<style>
     .p{
      color: #fff;
     }
     .contactform{
      margin: 100px;

     }

     .form-control{
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: medium;
     }

     .button{
      margin-left: 170px;     }

      .btn{
       background-color: #58426e;
     }
     </style>

      <!--Contact form starts-->
      <div class=".section text-white">
        
    <div class="contact">
    <div class="container">
        <section class="mb-4">
          <h1 class="text-center">Contact</h1>
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within 
            a matter of hours to help you.</p>
    
            <div class="row py-3">

                <div class="col-md-8">
                  <form id="contactform">
                    <div class="row">
                      <div class="col-md-3 py-3">
                        <div class="md-form mb-6">
                          <input type="text" name="name" class="form-control">
                          <label for="name">Your Name:</label>
                        </div>
                      </div>

                      <div class="col-md-3 py-3">
                        <div class="md-form mb-6">
                          <input type="text" name="email" class="form-control">
                          <label for="email">Your E-mail:</label>
                        </div>
                      </div>
                    
                    </div>
                  </form>
                </div>

                <div class="col-md-4">
                  <div class="md-form mb-2">
                    <div class="col-md-12 text-center text-white">
                      <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Helsinki</p> </li>
                      </ul>
                      </div>
                  </div>
                </div>

                
                  <div class="col-md-8">
                    <form id="contactform">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="md-form mb-2">
                            <input type="text" name="subject" class="form-control">
                            <label form="subject">Subject</label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-4 text-center text-white">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+358 518115115</p> </li>
                      </ul>
                  </div>
              


                    <div class="col-md-8">
                      <form id="contactform">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="md-form">
                              <textarea type="text" name="message" rows="3" class="form-control md-textarea"></textarea>
                              <label form="message">Your Message</label>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="col-md-4 text-center text-white">
                      <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>festevent@gmail.com</p> </li>
                      </ul>
                    </div>

    
                    <div class="button">
                      <button class="btn btn-primary" type="submit">Send</button>
                    </div>
            </div>
        </section>
       </div>
      </div>
      </div>

    <!--Contact form ends-->



<?php include "footer.php" ?>