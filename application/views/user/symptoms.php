<?php $this->load->view('template/header'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Your Symptoms</h2>
        <p>Here We provide your probable symptoms. Click and see your Tips. If you not found your symptoms among them please write your problem below. </p>
      </div>
    </div><!-- End Breadcrumbs -->
</main>
<div class="container text-center">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info mt-5 col-md-8" data-toggle="modal" data-target="#exampleModal">
    Major depression
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your tips</h5>
            </div>
            <div class="modal-body">
                <ul>
                    <li>1. It's one of the depression types with the most serious symptoms. As a consequence, it can occur in bursts and last for a long time. As a result, it has a huge impact on a teen's quality of life.</li>
                    <li>2. Depression is one of the most common psychiatric illnesses for young people. Thr serios part is the rate of depression has increased by 47% for boys and 65% for girls. In most cases, a major depressive phase lasts at least two weeks with bad mood. Low self-esteem, a lack of interest in usually enjoyable tasks, and issues of sleep, energy, and attention are all symptoms. It is difficult for the teens who suffered or suffering with major depression to work, study, sleep, and eat. Serious depression is also known as psychiatric depression or major depressive disorder.</li>                
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info mt-5 col-md-8" data-toggle="modal" data-target="#modal2">
    Generalized Anxiety Disorder (GAD).

    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your tips</h5>
            </div>
            <div class="modal-body">
                <ul>
                    <li>1. Generalized Anxiety Disorder (GAD) is most widespread adolescent disorder. Excessive fear or concern over daily activities characterizes this form of anxiety in adolescents. Furthermore, the fear exists for an extended period of time. They experience excessive worrying and a low self-esteem. They also experience stress and panic, which can interfere with their everyday lives at work and school.</li>
                    <li>2. Additionally, teen anxiety, like other teenage behavioral disorders, has an effect on teenagers' interactions with friends and family members.</li>                
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info mt-5 col-md-8" data-toggle="modal" data-target="#modal3">
    Chornic Fatigue  

    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your tips</h5>
            </div>
            <div class="modal-body">
                <ul>
                    <li>1. Chronic fatigue is a symptom of type 2 diabetes, although it may also be a result of thyroid issues, anemia, cardiac failure, fibromyalgia, among other illnesses.</li>
                    <li>2. If you're experiencing more than just general exhaustion and feeling totally depleted in energy, its time for diagnosis.</li>                
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info mt-5 col-md-8" data-toggle="modal" data-target="#modal4">
    Cervical Cancer

    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your tips</h5>
            </div>
            <div class="modal-body">
                <ul>
                    <li>1. Cervical Cancer is the most common among women aged around 30.</li>
                    <li>2. If women around this age face any irregular vaginal bleeding they should consult with doctors without delay.</li>
                    <li>3. While this symptom may not be serious but irregular bleeding can indicate towards an infection or benign endometrial or cervical polyp that is a non-cancerous growth in the womb or cervix lining.</li>                
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <p class="lead">If your symptom does not match with the given symptoms, then you can submit your symptom and we will get back to you soon!</p>

            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
                    <h6><?php echo $this->session->flashdata('success'); ?></h6></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <h6><?php echo $this->session->flashdata('error'); ?></h6></div>
            <?php } ?>


            <form action="<?php echo base_url('user/insert-symptoms'); ?>" method="post">
                <div class="d-none">
                    <label for="">User ID</label>
                    <input type="text" name="id" value="<?php echo $this->session->id; ?>">
                </div>
                <div class="form-group">
                    <textarea type="text" name="symptoms" placeholder="Write your symptoms here..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button></div>
            </form>
        </div>
    </div>


    
</div>


<?php $this->load->view('template/footer'); ?>