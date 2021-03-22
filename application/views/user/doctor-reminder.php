<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Your Appointments List</h1>
        <p>Here your save your doctor Appointments list.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-5" data-aos="fade-up">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Your Name</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Place</th>
                    <th scope="col">Date</th>
                    <th scope="col">Remaining Date</th>
                </tr>
            </thead>

            <?php

            
            $user_fullname = '';
            $user_doctor = '';
            $place = '';
            $doc_date = '';

            if(!empty($userInfo))
            {
                foreach ($userInfo as $uf)
                {
                    // $user_id = $uf->user_id;
                    $user_fullname = $uf->user_fullname;
                    $user_doctor = $uf->doctor;
                    $place = $uf->place;
                    $doc_date = $uf->doc_date;
                    // $user_email = $uf->user_email;
                    // // $user_password = $uf->user_password;
                    // $user_contact = $uf->user_contact;
                    // $user_dob = $uf->user_dob;
                    // $doctor = $uf->doctor;
                    // $place = $uf->place;
                    // $date = $uf->doc_date;
                    
                }
            }
            ?>

            <?php 
                $now = time(); // or your date as well
                $next_date = strtotime($doc_date);
                $datediff = $next_date -$now;
                
                $days_remaining =  round($datediff / (60 * 60 * 24));
            ?>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $user_fullname ?></td>
                    <td><?= $user_doctor ?></td>
                    <td><?= $place ?></td>
                    <td><?= $doc_date ?></td>
                    <td><?= $days_remaining ?> Days Left</td>
                </tr>
            </tbody>
        </table>
    </div>

</main>

<?php

            
            // $user_fullname = '';
            // $user_doctor = '';
            // $place = '';
            // $doc_date = '';

            // if(!empty($userInfo))
            // {
            //     foreach ($userInfo as $uf)
            //     {
            //         // $user_id = $uf->user_id;
            //         $user_fullname = $uf->user_fullname;
            //         $user_doctor = $uf->doctor;
            //         $place = $uf->place;
            //         $doc_date = $uf->doc_date;
            //         // $user_email = $uf->user_email;
            //         // // $user_password = $uf->user_password;
            //         // $user_contact = $uf->user_contact;
            //         // $user_dob = $uf->user_dob;
            //         // $doctor = $uf->doctor;
            //         // $place = $uf->place;
            //         // $date = $uf->doc_date;
                    
            //     }
            // }
            ?>

            <?php 
                // $now = time(); // or your date as well
                // $next_date = strtotime($doc_date);
                // $datediff = $next_date -$now;
                
                // $days_remaining =  round($datediff / (60 * 60 * 24));
            ?>



<?php $this->load->view('template/footer'); ?>