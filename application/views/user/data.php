<?php $this->load->view('template/header'); ?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Your Data Log</h1>
        <p>Here your save your All data</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-5" data-aos="fade-up">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Your Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Place</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>

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
                        // $user_password = $uf->user_password;
                        $user_contact = $uf->user_contact;
                        $user_dob = $uf->user_dob;
                        $doctor = $uf->doctor;
                        $place = $uf->place;
                        $date = $uf->doc_date;
                        
                    }
                }
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $user_id ?></th>
                    <td><?= $user_fullname ?></td>
                    <td><?= $user_email ?></td>
                    <td><?= $user_contact ?></td>
                    <td><?= $user_dob ?></td>
                    <td><?= $doctor ?></td>
                    <td><?= $place ?></td>
                    <td><?= $date ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</main>

<?php $this->load->view('template/footer'); ?>








<!-- data page -->
<?php

            // $user_id = '';
            // $user_fullname = '';
            // $user_email = '';
            // $user_password = '';
            // $user_contact = '';
            // $user_dob = '';

            // if(!empty($userInfo))
            // {
            //     foreach ($userInfo as $uf)
            //     {
            //         // $user_id = $uf->user_id;
            //         $user_fullname = $uf->user_fullname;
            //         $user_email = $uf->user_email;
            //         // $user_password = $uf->user_password;
            //         $user_contact = $uf->user_contact;
            //         $user_dob = $uf->user_dob;
            //         $doctor = $uf->doctor;
            //         $place = $uf->place;
            //         $date = $uf->doc_date;
                    
            //     }
            // }
            ?>

            
            