<?php $this->load->view('template/header'); ?>


  <main id="main" class="mt-5">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div> -->
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
      <!-- <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div> -->
          <div class="container mt-5">
          <?php if ($this->session->flashdata('success')) { ?>
          <div class="alert alert-success" role="alert">
                  <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
          <?php } ?>
          <?php if ($this->session->flashdata('error')) { ?>
              <div class="alert alert-danger" role="alert">
                  <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
          <?php } ?>
          </div>

      

          <div class="container mt-5">
            <h1 class="text-center display-3">Register Here</h1>
            <br>
            <br>
            <br>
            <div class="col-lg-12 mt-5 mt-lg-0">

            <?php

            $user_id = '';
            $user_fullname = '';
            $user_email = '';
            $user_password = '';
            $user_contact = '';
            $user_dob = '';

            if(!empty($userInfo))
            {
                foreach ($userInfo as $uf)
                {
                    // $user_id = $uf->user_id;
                    $user_fullname = $uf->user_fullname;
                    $user_email = $uf->user_email;
                    $user_password = $uf->user_password;
                    $user_contact = $uf->user_contact;
                    $user_dob = $uf->user_dob;
                    
                }
            }
            ?>
            
              <form action="<?php echo base_url('user/update'); ?>" method="post" role="form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" value="<?php echo $user_fullname; ?>" id="name" placeholder="Your Name" data-msg="Please enter your name" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $user_email; ?>" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" value="<?php echo $user_password; ?>" name="password" placeholder="Password" data-msg="Please enter at least 8 chars of password" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?php echo $user_contact; ?>" name="contact" placeholder="Contact No" data-msg="Please enter your contact no" />
                  <div class="validate"></div>
                </div><div class="form-group">
                  <input type="date" class="form-control" value="<?php echo $user_dob; ?>" name="dob" placeholder="Date of Birth" data-msg="Please enter at your date of birth" />
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
              </form>
  
            </div>
  
          </div>
  
        </div>
          </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php $this->load->view('template/footer'); ?>