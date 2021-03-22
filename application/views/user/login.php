<?php $this->load->view('template/header'); ?>


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

          <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success" role="alert">
              <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
      <?php } ?>
      <?php if ($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger" role="alert">
              <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
      <?php } ?>

          <div class="container mt-5">
            <h2 class="text-center display-3">Welcome to konna</h2>
            <h3 class="text-center">Please, Login to Your Account</h3>
            <br>
            <br>
            <br>
            <div class="col-lg-12 mt-5 mt-lg-0">

              <form action="<?php echo base_url(); ?>user/index" method="post">
                <div class="form-row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" onkeyup="manage(this)" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="subject" placeholder="Password" data-msg="Please enter at least 8 chars of password" onkeyup="manage(this)" />
                  <div class="validate"></div><br>
                  <input type="checkbox" id="Check">
                  <label class="form-check-label" for="Check">Remember Me!</label>
                </div>
                <div class="form-group">
                 <div class="text-center"><button name="submit" type="submit" id="submit" class="btn btn-success login" disabled>Login</button></div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <p>Do not have an account? <a href="<?php echo base_url('user/sign-up'); ?>">Please SignUp!</a></p>
                    <span>Or &nbsp;&nbsp;<a href="#">Forgot Password?</a></span>
                  </div>
                </div>
              </form>

            </div>
  
          </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script>
    function manage(txt) {
        var btn = document.getElementById('submit');
        var element = document.getElementsByTagName('input'); 

        // Loop through each element.
        for (i = 0; i < element.length; i++) {

            // Check the element type.
            if (element[i].type == 'text' && element[i].value == '') {
              btn.disabled = true;    // Disable the button.
                return false;
            }
            else if (element[i].type == 'password' && element[i].value == '') {
              btn.disabled = true;    // Disable the button.
                  return false;
            }
            else {
              btn.disabled = false;   // Enable the button.
            }
        }
    }
  </script>

  <?php $this->load->view('template/footer'); ?>