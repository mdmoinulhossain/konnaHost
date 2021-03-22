<?php $this->load->view('template/header'); ?>


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact">
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
  
              <form action="<?php echo base_url('user/process-sign-up'); ?>" method="post" role="form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-msg="Please enter your name" onkeyup="manage(this)" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" onkeyup="manage(this)" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="dob" placeholder="Date of Birth" data-msg="Please enter at your date of birth" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" data-msg="Please enter at least 8 chars of password" onkeyup="manage(this)" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contact" placeholder="Contact No" data-msg="Please enter your contact no" onkeyup="manage(this)" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <div class="text-center"><button type="submit" id="submit" class="btn btn-success signup" disabled>Submit</button></div>
                  <div class="mt-3">
                    <div><p>You have already an Account? <a href="<?php echo base_url('user/login'); ?>">Please Login.</a></p></div>
                  </div>
                </div>
              </form>
  
            </div>
  
          </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script>
     function manage(txt) {
        var bt = document.getElementById('submit');
        var ele = document.getElementsByTagName('input'); 

        // Loop through each element.
        for (i = 0; i < ele.length; i++) {

            // Check the element type.
            if (ele[i].type == 'text' && ele[i].value == '') {
                bt.disabled = true;    // Disable the button.
                return false;
            }
           else if (ele[i].type == 'password' && ele[i].value == '') {
            	bt.disabled = true;    // Disable the button.
                return false;
           }
            else {
                bt.disabled = false;   // Enable the button.
            }
        }
    }
  </script>

  <?php $this->load->view('template/footer'); ?>