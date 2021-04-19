<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KONNA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href = "<?php echo base_url(); ?>asset/jquery-ui.css" rel = "stylesheet">

  <!-- icon link -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/dashboard.css') ?>" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?= base_url('assets/js/ajax.js') ?>"></script>

</head>

<body>

<!-- ======= Header ======= -->
  <header id="header" class="sticky-top">
    <div class="container d-flex align-items-center">

      <a href="<?php echo base_url('/'); ?>" class="logo mr-auto"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="KONNA" ></a>
      <!-- logo set -->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <!-- <li><a href="<?php //echo base_url('filter'); ?>">Doctor</a></li> -->
          <?php if(!empty($this->session->name)): ?>
          <li class="drop-down"><a href="<?php echo base_url('periodCycle'); ?>">Period cycle log</a>
            <ul>            
              <li><a href="<?= base_url('data/').$this->session->id; ?>">Data Log</a></li>
              <li><a href="<?= base_url('symptom-log/').$this->session->id; ?>">Symptoms Log</a></li>
              <li><a href="<?php echo base_url('filter'); ?>">Sugestions on Symptoms</a></li>              
            </ul>
          </li>
          <?php else: ?>
          <li class="drop-down"data-toggle="tooltip" data-placement="bottom" title="Please Login and access"><a href="#">Period cycle log</a>
            <ul>            
              <li><a href="#">Data Log</a></li>
              <li><a href="#">Symptoms Log</a></li>
              <li><a href="#">Sugestions on Symptoms</a></li>              
            </ul>
          </li>
          <?php endif ?>

          <?php if(!empty($this->session->name)): ?>
          <li class="drop-down"><a href="<?php echo base_url('healthTips'); ?>">Health Tips</a>
            <ul>
              <li><a href="<?php echo base_url('Tips'); ?>">General Tips</a></li>
                <li><a href="<?php echo base_url('user/age-tips'); ?>">Age Wise Tips</a></li>
                <li><a href="<?= base_url('user/symptoms'); ?>">Your Symptoms</a></li>
            </ul>
          </li>
          <?php else: ?>
            <li class="drop-down"><a href="<?php echo base_url('healthTips'); ?>">Health Tips</a>
              <ul>
                <li><a href="<?php echo base_url('Tips'); ?>">General Tips</a></li>
                  <li><a href="#">Age Wise Tips</a></li>
                  <li><a href="#">Your Symptoms</a></li>
              </ul>
            </li>
          <?php endif ?>

          <li class="drop-down"><a href="<?php echo base_url('healthAssistence'); ?>">Health Assisstance</a>
            <ul>
              <li><a href="<?= base_url('user/dashboard'); ?>">Period Reminder</a></li>              
              <li><a href="<?= base_url('edit-period/').$this->session->id; ?>">Period Update</a></li>              
              <li><a href="<?= base_url('user/medication'); ?>">Medication Reminder</a></li>
              <li><a href="<?= base_url('doctor-reminder/').$this->session->id; ?>">Doctors Reminder</a></li>
              <li><a href="<?= base_url('doctor-reminder/').$this->session->id; ?>">Follow up Reminder</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="<?php echo base_url('healthDirectory'); ?>">Health Directory</a>
            <ul>
              <li><a href="<?php echo base_url('causeEffect'); ?>">Symptoms (Cause & Effect)</a></li>              
              <li><a href="<?php echo base_url('hospitals'); ?>">Doctor/Hospital Suggestion</a></li>
              <li><a href="<?php echo base_url('ambulance'); ?>">Ambulance Directory</a></li>
              <li><a href="<?php echo base_url('freezer'); ?>">Freezer van Directory</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="<?php echo base_url('awareness'); ?>">Awareness</a>
            <ul>
              <li><a href="<?php echo base_url('news'); ?>">News</a></li>
              <li><a href="<?php echo base_url('reports'); ?>">Reports</a></li>
            </ul>
          </li>
          
          <?php if(!empty($this->session->name)): ?>
            <li><a href="#" style="font-size: 18px;"><i class="icofont-alarm"></i></a></li>
          <li class="drop-down"><a href="" style="font-size: 18px;"><i class="icofont-ui-user"></i></a>
            <ul>
              <li><a href="<?= base_url('user/dashboard'); ?>">Dashboard  <i class="icofont-ui-settings"></i></a></li>
              <!--<li><a href="<?//php base_url('edit/').$this->session->id; ?>">Edit Profile  <i class="icofont-edit"></i></a></li>-->
              <li><a href="<?= base_url('logout'); ?>">Logout  <i class="icofont-logout"></i></a></li>
            </ul>
          </li>
          <?php else: ?>
            <li><a href="<?php echo base_url('/user/login'); ?>">Login</a></li>
          <?php endif ?>
          
          
        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="courses.html" class="get-started-btn"><i class='fab fa-google-play'></i> Google Play</a>
      <a href="courses.html" class="get-started-btn"><i class='fab fa-apple'></i> App Store</a> -->

    </div>
  </header><!-- End Header -->
