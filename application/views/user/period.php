<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>ADD YOUR FUTURE PERIOD DATE</h1>
        <p>It's help you for countdown your next period!</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">
        <?php

            $user_id = '';
            $mydate = '';
            $content = '';

            if(!empty($userInfo))
            {
                foreach ($userInfo as $uf)
                {
                    // $user_id = $uf->user_id;
                    $mydate = $uf->mydate;
                    $content = $uf->content;
                    
                    
                }
            }
        ?>
            <form action="<?php echo base_url('user/insert-period'); ?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                <label for="">User Id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $this->session->id; ?>">
                </div>
                <div class="col-md-6 form-group">
                <label for="">Date</label>
                <input type="date" name="date" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <Label>Content</Label>
                <input type="text" name="content" class="form-control">
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



<?php $this->load->view('template/footer'); ?>








<!-- <h1>Period</h1>
<form action="<?php // echo base_url('user/insert-period'); ?>" method="post">
    <label for="">User Id</label>
    <input type="text" name="id" value="<?php // echo $this->session->id; ?>">
    <label for="">Date</label>
    <input type="date" name="date">
    <Label>Content</Label>
    <input type="text" name="content">
    <button type="submit" class="btn btn-success">Submit</button></div>
</form> -->