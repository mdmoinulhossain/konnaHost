<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Add Your Medicine Name</h1>
        <p>Here your save your medicine name with inhale time for remainder.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">
            <form action="<?php echo base_url('user/insert-medication'); ?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                <label for="">User ID</label>
                <input type="text" name="id" class="form-control" value="<?php echo $this->session->id; ?>">
                </div>
                <div class="col-md-6 form-group">
                <label for="">Medicine Name</label>
                <input type="text" name="medicine" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label for="">Time</label>
                <input type="time" name="time" class="form-control">
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Add Medicine</button></div><br>
              <a href="<?= base_url('medication-reminder/').$this->session->id; ?>" class="btn btn-success">See Your Medicine List</a>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php $this->load->view('template/footer'); ?>










<!-- <form action="<?php // echo base_url('user/insert-medication'); ?>" method="post">
    <label for="">User ID</label>
    <input type="text" name="id" value="<?php // echo $this->session->id; ?>">
    <label for="">Medicine Name</label>
    <input type="text" name="medicine" id="">
    <label for="">Time</label>
    <input type="time" name="time">
    <button type="submit" class="btn btn-success">Submit</button></div>
</form> -->