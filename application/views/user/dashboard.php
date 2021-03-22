<?php $this->load->view('template/header'); ?>

<style type="text/css">
table{
border: none;
border-collapse:collapse;
margin-top: 50px;
margin-left: 335px;
}
td{
width: 10px;
height: 10px;
text-align: center;
border-bottom: 1px solid #fff;
font-size: 18px;
font-weight: bold;
color: #000;
}
th{
height: 50px;
background:rgba(155, 77, 157, 0.6);
font-size: 25px;
text-align:center;
color: #262626;
}

.prev_sign a{
color:#f6576d;
}
.prev_sign a:hover{
  color: #fff;
  font-size: 30px;
}
tr.week_name{
font-size: 16px;
font-weight:400;
color:red;
width: 10px;
background-color: #efe8e8;
}
.highlight{
background-color:#25BAE4;
color:white;
}
.calender .days td
{
 width: 65px;
 height: 65px;
}
.calender .hightlight
{
 font-weight: 600px;
 color:red;

}
.calender .days td:hover
{
 background-color: #f6576d;
  color: #fff;
}
#calender {margin-top: -875px; margin-left: -200px;}
#canvas {margin-top: -120px; margin-left: -120px;}
@media only screen and (max-width: 768px) {
  #canvas {width: 550px; height:auto; margin-left: -92px; padding: 0 10px 0 20px}
  #calender {margin-top: -520px; margin-left: -300px;}
  .calender .days td
  {
    width: 40px;
    height: 30px;
  }
  th{
    font-size: 20px;
  }
  td{
    font-size: 14px;
  }
}

</style>
<script>
 window.onload=function(){
   canvas = document.getElementById("canvas");
     var context = canvas.getContext("2d");
   canvas.x = 100;
   canvas.y = 100;
   var w = 700, h = 800;
   context.strokeStyle = "#f6576d";
   context.strokeWeight = 6;
   context.shadowOffsetX = 4.0;
   context.shadowOffsetY = 4.0;
   context.lineWidth = 10.0;
   context.fillStyle = "#9b4d9d";
   var d = Math.min(w, h);
   var k = 120;
   context.moveTo(k, k + d / 4);
   context.quadraticCurveTo(k, k, k + d / 4, k);
   context.quadraticCurveTo(k + d / 2, k, k + d / 2, k + d / 4);
   context.quadraticCurveTo(k + d / 2, k, k + d * 3/4, k);
   context.quadraticCurveTo(k + d, k, k + d, k + d / 4);
   context.quadraticCurveTo(k + d, k + d / 2, k + d * 3/4, k + d * 3/4);
   context.lineTo(k + d / 2, k + d);
   context.lineTo(k + d / 4, k + d * 3/4);
   context.quadraticCurveTo(k, k + d / 2, k, k + d / 4);
   context.stroke();
   context.fill();
 }
</script>
<script src="ajax.js"></script>
  <main id="main"> 

  <!-- <a href="#addEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Period</span></a>
  <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
  
  
  

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konna";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(count($_POST)>0){
	if($_POST['type']==1){
		$date=$_POST['date'];
		$content=$_POST['content'];

	//	$email=$_POST['email'];
	//	$phone=$_POST['phone'];
  $user_id = $this->session->id;
  

  // <h1>$user_id;</h1>
  // $user_id =  $this->session->id; 

  $sql = "INSERT INTO `calendar`(`user_id`, `mydate`,`content`)
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 0 DAY),'day01' )
		UNION ALL	
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 1 DAY),'day02' )
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 2 DAY),'day03') 
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 3 DAY),'day04')
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 4 DAY),'day05') 
		UNION ALL
 



		(SELECT '$user_id', ADDDATE('$date', INTERVAL 29 DAY),'day01')
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 30 DAY),'day02') 
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 31 DAY),'day03')
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 32 DAY),'day04')
		UNION ALL
		(SELECT '$user_id', ADDDATE('$date', INTERVAL 33 DAY),'day05') 
		
		
		;";
		
		//$sql .= "INSERT INTO `calendar` (SELECT ADDDATE(['date'], INTERVAL 29 DAY), 'content')";
		//INSERT INTO calendar (date,content) VALUES ('2021-03-03', 'Norway');
		//$sql1= "SELECT ADDDATE(['date'], INTERVAL 10 DAY)";
		
		//INSERT INTO calendar(date,content) VALUES  (SELECT ADDDATE('2021-03-03', INTERVAL 29 DAY), 'forway');
		//.$sql=INSERT INTO calendar(date,content) SELECT ADDDATE('date', INTERVAL 29 DAY),'first success';
		if (mysqli_multi_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$date=$_POST['date'];
		$content=$_POST['content'];
		//$email=$_POST['email'];
		//$phone=$_POST['phone'];
    $user_id = $this->session->id;
	
		$sql = "UPDATE `calendar` SET `date`='$date',`content`='$content' WHERE id=$id;" ;
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `calendar` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM calendar WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>
  
  <!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Please Insert your date</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<div class="form-group">
							<label>DATE</label>
							<!--date-->
							<input type="date" id="date" name="date" class="form-control" required>
						</div>					
						<div class="form-group">
							<label>CONTENT</label>
							<input type="text" id="content" name="content" class="form-control" required>
						</div>
						<!--
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone" name="phone" class="form-control" required>
						</div>
						-->
										
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

  <!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
      <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success" role="alert">
              <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
      <?php } ?>
      <?php if ($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger" role="alert">
              <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
      <?php } ?>
      
        <div class="row">
          <div class="col-lg-8">
            
            <canvas id="canvas" width="1000" height="1000" x="40" y="30"></canvas><br><br>
              <div id="calender" style="position: relative;">
                <?php echo $calender; ?>   
              </div>
            <br><br><br><br><br><br><br><br>
            <?php $id = $this->session->id; ?>
            
            
            

            <?php
            date_default_timezone_set("Asia/Dhaka");
            // $time = date("Y-m-d h:i:sa");
            $time = date("Y-m-d");
            ?>

            

            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konna";




            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $user_id = $this->session->id;

            $sql = "SELECT mydate FROM calendar WHERE user_id='$user_id' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $period = $row["mydate"];
                $newPeriod = date('Y-m-d', strtotime($period. ' + 29 days'));

$start2 = strtotime($newPeriod);
$end2 = strtotime($time);

$days_between_new = ceil(abs($end2 - $start2) / 86400);
              }
            } else {
              $days_between_new = "Null";
              $newPeriod = "Null";
            }
            $conn->close();
            ?> 

            

            <?php 
            if (!empty($period)) {
              $start = strtotime($period);
            $end = strtotime($time);
            
            $days_between = ceil(abs($end - $start) / 86400);
            $days_between_final = date('Y-m-d', strtotime($days_between. ' + 29 days'));
            } else {
              
            }
            
            
            ?>

            

            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konna";



            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            //$f1=0;
            //$f2=0;
            //$f3=0;

            
              // if($days_between == 3){
              //   // $f3=0;
              //   if ($f3 != $) {
              //     $sql2 = "INSERT INTO notification (user_id, pr_days) VALUES ('$id', '$days_between')";
              //   if ($conn->query($sql2) == TRUE) {
              //     echo "New record created successfully";
              //   } else {
              //     echo "Error: " . $sql . "<br>" . $conn->error;
              //   }
                
              //   $conn->close();
              //   $f3 = 1 ;
              //   echo $f3;
              
              
              //             } else {
              //               echo "else";
              //             }
              //   }

              /*

              eta hoitese nafiur bhai er jinish

              $days_between;
              
              switch ($days_between) {
                case 3 :
                  if ($flag == 512) {
                   $sql2 = "INSERT INTO notification (user_id, pr_days) VALUES ('$id', '$days_between')";
                   $flag = 404;
                   if ($conn->query($sql2) == TRUE) {
                     echo "New record created successfully";
                   } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                   }
                  }
                  echo "jhdjhsd";
                  
                  break;
                case 2 : 
                  if ($flag == 404) {
                    $sql2 = "INSERT INTO notification (user_id, pr_days) VALUES ('$id', '$days_between')";
                    $flag = 202;
                    if ($conn->query($sql2) == TRUE) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                  }
                  break;
                case 1 : 
                  if ($flag == 202) {
                    $sql2 = "INSERT INTO notification (user_id, pr_days) VALUES ('$id', '$days_between')";
                    $flag = 512;
                    if ($conn->query($sql2) == TRUE) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                  }
                default:
                  $flag = 512;
                  echo $flag;
                  break;
              }

              */
                
               
              
            
            
//             if ($days_between == 1 || $days_between == 2 || $days_between == 3) {
//               echo "Logic";
// //notif input
//               $sql2 = "INSERT INTO notification (user_id, pr_days)
//               VALUES ('$id', '$days_between')";
  
//               if ($conn->query($sql2) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   $conn->close();



//             } else {
//               echo "";
//             }           
            ?>
          </div>
          <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Name</h5>
              <p><?php echo $this->session->name; ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Your Age</h5>
              <?php           
                $_age = floor((time() - strtotime($this->session->dob)) / 31556926);
              ?>
              <p><?= $_age ?></p>
              
              <!-- age calculation -->
            </div> 
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Your Date of Birth</h5>
              <p><?php echo $this->session->dob; ?></p>          
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Add Period date</h5>
              <a class="btn btn-danger" href="<?= base_url('user/period') ?>" style="color: #fff;">Period</a>          
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Click here for doctor Appointment</h5>
              <a class="btn btn-danger" href="<?= base_url('user/doctor') ?>" style="color: #fff;">Doctor</a>          
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Cource Details Section -->
      
  <div class="container" data-aos="fade-up">
    <div class="card text-center period">
      <div class="card-header">
        <div class="rcorners1">
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




          <p><?= $days_between_new ?></p>
          <span>Day's Remaining</span>
        </div>
        <br>
        <h5 class="card-title">Your Approximate Period date</h5>
        <div class="card-footer text-muted">
          <h4><?= $newPeriod ?></h4>
        </div>
      </div>      
    </div>
  </div>

  <!-- ======= Features Section ======= -->
  
      <div class="container" data-aos="fade-up">

      <div class="jumbotron">
        <h1>Hello, <?php echo $this->session->name; ?></h1>
        <p class="lead">This is your monthly Report</p>
        <hr class="my-4">
        <p>It's help you to know your current health condition!</p>
        <p class="lead">
          <a class="btn btn-lg pdf" href="<?= base_url('user/pdf/').$this->session->id; ?>" role="button" target="_blank">Download PDF <i class="icofont-download-alt"></i></a>
        </p>
      </div>

      </div>
    <!-- End Features Section -->

    <!-- Modal -->
    <div class="modal fade" id="mainpopup" tabindex="-1" role="dialog" aria-labelledby="mainpopupLabel" aria-hidden="true"  data-close="10" data-open="2" data-href="https://www.anitur.com.tr/popup/test-6-text">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="memberModalLabel">Popuper</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
							<label>DATE</label>
							<!--date-->
							<input type="date" id="date" name="date" class="form-control" required>
						</div>					
						<div class="form-group">
							<label>CONTENT</label>
							<input type="text" id="content" name="content" class="form-control" required>
						</div>
          </div>
          <div class="modal-footer">
            <span class="will-close">will be closed after : <strong>n</strong> seconds</span>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>
      </div>
    </div>
    <!-- end Modal -->
  </main><!-- End #main -->

            
  <?php $this->load->view('template/footer'); ?>

  <!-- <script>
    $(function() {
  var popup = $('#mainpopup');
  var time = $(".will-close strong");
  var closeSeconds = $("#mainpopup").attr("data-close");
  var openSeconds = $("#mainpopup").attr("data-open");
  var dataSrc = $("#mainpopup").attr("data-href");
  

  setTimeout(function(e) {
    
    popup.modal('show');
    // time.html(closeSeconds);
    
    // setInterval(function(){
    //   time.html(closeSeconds);
    //   closeSeconds--;
      
    //   if(closeSeconds < 0){
    //     popup.modal('hide');
    //   }
      
    // }, 1000)
    
  }, openSeconds * 1000);
  
    $.ajax({
    url: dataSrc,
    dataType: "html",
    success: function(data) {
      $(".modal-body").html(data);
    }
  });
  
  
});
  </script> -->

  


