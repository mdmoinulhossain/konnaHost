<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>EDIT PERIOD DATE</h1>
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
            <form action="<?php echo base_url('user/period-update'); ?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                <label for="">User Id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $this->session->id; ?>">
                </div>
                <div class="col-md-6 form-group">
                <label for="">Date</label>
                <input type="date" name="date" class="form-control" value="<?php echo $mydate?>">
                </div>
              </div>
              <div class="form-group">
                <Label>Content</Label>
                <input type="text" name="content" class="form-control" value="<?php echo $content?>">
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

<!-- <h1>Period</h1> -->
<!-- <?php

            // $user_id = '';
            // $mydate = '';
            // $content = '';

            // if(!empty($userInfo))
            // {
            //     foreach ($userInfo as $uf)
            //     {
            //         // $user_id = $uf->user_id;
            //         $mydate = $uf->mydate;
            //         $content = $uf->content;
                    
                    
            //     }
            // }
?> -->
<!-- <form action="<?php // echo base_url('user/period-update'); ?>" method="post">
    <label for="">User Id</label>
    <input type="text" name="id" value="<?php // echo $this->session->id; ?>">
    <label for="">Date</label>
    <input type="date" name="date" value="<?php // echo $mydate?>">
    <Label>Content</Label>
    <input type="text" name="content" value="<?php // echo $content?>">
    <button type="submit" class="btn btn-success">Submit</button></div>
</form> -->


<?php $this->load->view('template/footer'); ?>