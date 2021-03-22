<!-- ======= Header ======= -->
<?php $this->load->view('template/header'); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      <?php $_age = floor((time() - strtotime($this->session->dob)) / 31556926); ?>
        <h5>Your Age</h5> <h1><?= $_age ?></h1>
      </div>
    </div><!-- End Breadcrumbs --><br>

    <!-- ======= General Tip's Section ======= -->
    <div class="card text-center">
        <h2>General Tip's</h2>
    </div>    
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
      <?php if($_age >= 11 & $_age < 20): ?>
        
        <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Changing sanitary napkins</a></h5>
                <p class="card-text">Try to Change sanitary napkins to every 4 to 6 hours a day depending on the flow. This habit will ensure that menstrual blood does not spill over to ruin the clothing, becoming an infection breeding ground. Ref - </p>
                <a href="https://www.parentcircle.com/article/10-health-tips-for-teenage-girls/">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Quite time</a></h5>
                <p class="card-text">Do you know that spending 30 to 45 minutes quitely in a quite place, you will find solace and re-gain energy. Ref - </p>
                <a href="https://www.parentcircle.com/article/10-health-tips-for-teenage-girls/">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Vaccine</a></h5>
                <p class="card-text">Experts advocate having the HPV vaccine (Human papillomavirus vaccines) series for all teenagers. This will prevent cervical, oral, and anal cancer caused by human papillomavirus.</p>
                <a href="https://www.nychealthandhospitals.org/healthtips/ask-our-expert-5-healthy-tips-for-teenage-girls/">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Sleeping habits</a></h5>
                <p class="card-text">Recent findings have shown that teenagers who do not get enough sleep are more likely to have mental and behavioral disorders, depression, and low academic success. Experts claim that most adolescents require 8 – 10 hours of sleep every night.</p>
                <a href="https://www.nychealthandhospitals.org/healthtips/ask-our-expert-5-healthy-tips-for-teenage-girls/">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <?php elseif($_age >= 20 & $_age < 30): ?>
        
        <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Drink responsibly</a></h5>
                <p class="card-text">Excess drinking over time will lead to liver disease, raise the risk of multiple cancers and heart attacks, and build up your immune system. If you are likely to drink, do so moderately. That means one drink a day.</p>
                <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limiting suger and sodium</a></h5>
                <p class="card-text">The World Health Organization advises restricting the consumption of added sugar to about 25 grams (or 6 teaspoons) a day. For sodium, stay to 2300 mg (about 1 teaspoon of table salt) a day.</p>
                <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Maintaining protein</a></h5>
                <p class="card-text">If you are in your 20s make sure that you are not skimping out on protein. Atleast 60 to 70 grams of protein a day is needed. Also focus on - potassium, omega-3 fats, calcium, phytonutrients, and iron. If you are planning on pregnency, you must get enough folic acid.</p>
                <a href="https://www.mymarinhealth.org/documents/content-assets/integrative-wellness/Health-Tip-Sheets-Women-20-30.pdf">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limiting suger and sodium</a></h5>
                <p class="card-text">Building strong bones - Your bone density will almost reach its peak by the time you hit your late 20s. That is why you need to take around 1000 mg of calcium a day at this age. The food sources for calcium includes cheese, tofu, several kinds of beans, and some dark, leafy greens. You can take a good dose of vitamin D, 400 IU per day.</p>
                <a href="medbroadcast.com/healthfeature/gethealthfeature/your-20s-a-health-guide-for-women">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <?php elseif($_age >= 30 & $_age < 40): ?>
        
          <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Drink responsibly</a></h5>
                <p class="card-text">Excess drinking over time will lead to liver disease, raise the risk of multiple cancers and heart attacks, and build up your immune system. If you are likely to drink, do so moderately. That means one drink a day.</p>
                <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limiting suger and sodium</a></h5>
                <p class="card-text">The World Health Organization advises restricting the consumption of added sugar to about 25 grams (or 6 teaspoons) a day. For sodium, stay to 2300 mg (about 1 teaspoon of table salt) a day.</p>
                <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Maintaining protein</a></h5>
                <p class="card-text">If you are in your 20s make sure that you are not skimping out on protein. Atleast 60 to 70 grams of protein a day is needed. Also focus on - potassium, omega-3 fats, calcium, phytonutrients, and iron. If you are planning on pregnency, you must get enough folic acid.</p>
                <a href="https://www.mymarinhealth.org/documents/content-assets/integrative-wellness/Health-Tip-Sheets-Women-20-30.pdf">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limiting suger and sodium</a></h5>
                <p class="card-text">Building strong bones - Your bone density will almost reach its peak by the time you hit your late 20s. That is why you need to take around 1000 mg of calcium a day at this age. The food sources for calcium includes cheese, tofu, several kinds of beans, and some dark, leafy greens. You can take a good dose of vitamin D, 400 IU per day.</p>
                <a href="medbroadcast.com/healthfeature/gethealthfeature/your-20s-a-health-guide-for-women">Read More</a>
              </div>
            </div>
          </div>
        </div>


        <?php elseif($_age >= 40 & $_age < 50): ?>
        
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Mammogram screenings</a></h5>
                <p class="card-text"> - The American Cancer Society highly suggest an annual mammogram testing for women in their 40s. This screening is important for early diagnosis of breast cancer. The American Cancer Society also notes that years of studies have found that women who have routine mammograms are more likely to detect breast cancer early, are less likely to require more intensive care, such as surgery or chemotherapy, and are more likely to be healed.</p>
                <a href="https://www.everlywell.com/blog/womens-health/health-tips-for-women/">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Bone density</a></h5>
                <p class="card-text">By this time your bones must need a good care. Consider taking at least 1,200 milligrams of calcium daily with vitamin D supplyments by doctor's consult.</p>
                <a href="https://www.webmd.com/women/features/women-over-50-your-personal-checklist#:~:text=It's%20important%20for%20women%20over,to%20sweets%2C%20but%20only%20occasionally">Read More</a>
              </div>
            </div>
          </div>
        </div>
      
      
      <?php else: ?>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Getting fiber in meals</a></h5>
                <p class="card-text"> - To your food, add more fiber. Fiber prevents constipation, assists in weight loss, reduces the risk of diabetes, pre-diabetes, cardiac disease, bowel cancer, and lowers the blood cholesterol levels. Women over 50's should take 21 grams of fiber a day. Healthy fiber sources include beans, whole grains, vegetables and fruit.</p>
                <a href="https://familydoctor.org/healthy-habits-at-age-60-and-beyond/">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Bones health </a></h5>
                <p class="card-text">Aging and inactivity can lead to achy joints because of the wearing down of cartilage, loss of lubricating joint fluid and weaker muscles. The bones are stimulated by weight-bearing exercises to become stronger and denser, which may help against bone fractures and osteoporosis. Also, the recomended dose of vitamin D is 600 IU a day but with doctor's approval.</p>
                <a href="https://www.aarp.org/health/healthy-living/info-09-2012/what-to-expect-in-your-60s.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      </div>
    </section>
    <!-- End General Tip's Section -->

    <!-- ======= Food and Lifestyle Section ======= -->
    <div class="card text-center">
        <h2>Food and Lifestyle</h2>
    </div>    
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
      <?php if($_age >= 11 & $_age < 20): ?>
        <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Vegtables</a></h5>
                <p class="card-text">Enjoy some cruciferous vegetables including broccoli, cabbage, cauliflower, watercress and arugula three days a week. They are disease-fighters, will fill you up, and reduce pressure.</p>
                <a href="https://www.cbsnews.com/pictures/dr-ozs-25-health-tips-for-teens/8/">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Oil control</a></h5>
                <p class="card-text">There is a simple three-step method for oil management if you want to hold the shine down without being rough on your skin: (1) use a salicylic acid cleanser, (2) use an oil-free primer to regulate shine, and (3) use specialized cloths or tissues to blot oil during the day.</p>
                <a href="https://www.everydayhealth.com/skin-and-beauty/skin-care-for-teen-skin.aspx">Read More</a>              
              </div>
            </div>
          </div>
        </div>

        <?php elseif($_age >= 20 & $_age < 30): ?>
          <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Digestion</a></h5>
                <p class="card-text">Drink at least two glasses of water for improved digestion before getting your breakfast.</p>
                <a href="https://a-lifestyle.com/healthy-lifestyle-tips-for-woman-20s/">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Incorporate Retinol</a></h5>
                <p class="card-text">Dermatologists believe that the 20s are the best time to start using high-quality retinol at night, since the vitamin A derivative acts preventively to combat wrinkles and improve collagen development.</p>
                <a href="https://www.byrdie.com/skincare-in-your-40s-advice">Read More</a>              
              </div>
            </div>
          </div>
        </div>

        <?php elseif($_age >= 30 & $_age < 40): ?>
          <div class="row mt-3">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Tanning is deadly</a></h5>
                <p class="card-text">Not only can tanning lead to premature wrinkles, tanning beds significantly raise the chances of contracting melanoma, the most dangerous type of skin cancer. So go for more natural way for tanning if you really want to.</p>
                <a href="https://www.womenshealthmag.com/health/g19986334/healthy-lifestyle-over-30/?slide=37">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Healthy meals</a></h5>
                <p class="card-text">Cut processed foods as much as possible during your 30's. Consume more lean proteins and omega-3s such as fish and nuts. Also, make fruit and vegetables around 70% of your diet.</p>
                <a href="https://www.today.com/health/6-biggest-health-mistakes-women-make-their-30s-t36596">Read More</a>              
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Induce good bacteria</a></h5>
                <p class="card-text">It's important to pay attention to what you're consuming. A balanced intestine determines the course of your wellbeing. Your gut wellbeing can be enhanced by incorporating foods rich in probiotics and good bacteria, such as kefir, yogurt and kombucha. Also, it is significant for women who may be approaching to their premenopausal age.</p>
                <a href="https://timesofindia.indiatimes.com/life-style/food-news/10-food-habits-to-adopt-in-40s-that-can-add-10-more-years-to-your-life/photostory/73333978.cms?picid=73334045">Read More</a>              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><a href="">Tip's 2</a></h5>
                <p class="card-text">Age spot - You may note that your skin has become more delicate with growing number of age spots. To minimize this, try using prescriped hydroquinone prodcuts. Also to reduce file lines and wrinkles use prescriped retinol products like Retin-A or Renova.</p>
                <a href="https://www.aarp.org/health/healthy-living/info-09-2012/what-to-expect-in-your-60s.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      </div>
    </section>
    <!-- End Food and Lifestyle Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php $this->load->view('template/footer'); ?>