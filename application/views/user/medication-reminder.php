<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Your Medicine list</h1>
        <p>Here your save your All medicine data</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-5" data-aos="fade-up">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Your Name</th>
                    <th scope="col">Medicine</th>
                    <th scope="col">Medicine time</th>
 
                </tr>
            </thead>

            <?php
            
            // $user_id = '';
            $user_fullname = '';

            $user_medicine = '';
            $medicine_time = '';

            if(!empty($userInfo))
            {
                foreach ($userInfo as $uf)
                {
                    // $user_id = $uf->user_id;
                    $user_fullname = $uf->user_fullname;
                    $user_medicine = $uf->medicine;
                    $medicine_time = $uf->medicine_time;

                    
                }
            }



            ?>
            <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td><?= $user_fullname ?></td>
                    <td><?= $user_medicine ?></td>
                    <td><?= $medicine_time ?></td>
     
                </tr>
            </tbody>
        </table>
    </div>

</main>

<?php $this->load->view('template/footer'); ?>




            