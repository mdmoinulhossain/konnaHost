<?php $this->load->view('template/header'); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Add Your Doctor Appointment Schedule.</h1>
        <p>Here your save your Doctor Appointment Schedule for remainder.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">
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
            <form action="<?php echo base_url('user/insert-doctors-appoinment'); ?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                <label for="">User ID</label>
                <input type="text" name="id" class="form-control" value="<?php echo $this->session->id; ?>">
                </div>
                <div class="col-md-6 form-group">
                <label for="">Doctors Name</label>
                <input type="text" name="docname" class="form-control" id="">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="">Place</label>
                    <input type="text" name="place" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
              </div>

              <div class="mb-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Add Doctor Appointment</button></div><br>
              <a href="<?= base_url('doctor-reminder/').$this->session->id; ?>" class="btn btn-success">See Your Doctor Appointment List</a>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->












   <!-- <div class="container mt-5">
    <?php // if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success" role="alert">
            <h6><?php // echo $this->session->flashdata('success'); ?></h6></div>
    <?php// } ?>
    <?php // if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <h6><?php//  echo $this->session->flashdata('error'); ?></h6></div>
    <?php // } ?>
    </div> -->

    <!-- <form action="<?php // echo base_url('user/insert-doctors-appoinment'); ?>" method="post">
        <div class="form-group">
            <label for="">User ID</label>
            <input type="text" name="id" value="<?php // echo $this->session->id; ?>">
        </div>
        <div class="form-group">
            <label for="">Doctors Name</label>
            <input type="text" name="docname">
        </div>
        <div class="form-group">
            <label for="">Place</label>
            <input type="text" name="place">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="date" name="date">
        </div>
        <button type="submit" class="btn btn-success">Submit</button></div>
    </form>

    <a href="<?php // base_url('doctor-reminder/').$this->session->id; ?>">See Your Medicine</a> -->

    <?php $this->load->view('template/footer'); ?>