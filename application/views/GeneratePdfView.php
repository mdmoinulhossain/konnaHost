<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Your Report</title>

    <style>
    html { background: #000; }
    body { margin:20px;
     background-color: rgba(155, 77, 157,0.1);
     border-radius: 25px;
     padding: 15px;    
    }
    
    </style>
</head>

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
        $user_password = $uf->user_password;
        $user_contact = $uf->user_contact;
        $user_dob = $uf->user_dob;
        
    }
}
?>


<body>
<h1 style="COlor:#9b4d9d; text-align:center;">Welcome To KONNA</h1><hr>
  <h4 style="text-align:center;">This is your Monthly Report.</h4>
  <span>Name: <?= $user_fullname ?></span><br>
  <span>Email: <?= $user_email ?></span><br>
  <span>Phone: <?= $user_contact ?></span><br>
  <span>Date of Birth: <?= $user_dob ?></span><br>
</div>
<?php 
            
$_age = floor((time() - strtotime($user_dob)) / 31556926);

?>
<span>Age: <?= $_age ?></span>

<div>
<h2 style="text-align:center;">General Tip's</h2><hr>
  <?php if($_age >= 11 & $_age < 20): ?>
  <ul>
  <li><p style="color:#055d61; font-size:20px;">Genereal Tips-1: 
  Changing sanitary napkins - Try to Change sanitary napkins to every 4 to 6 hours a day depending on the flow. This habit will ensure that menstrual blood does not spill over to ruin the clothing, becoming an infection breeding ground.</p>
  <a href="https://www.parentcircle.com/article/10-health-tips-for-teenage-girls/" style="text-decoration:none;">Read More....</a>
  </li> 
  </ul>
  <?php elseif($_age >= 20 & $_age < 30): ?>
  <p>
  General Tips:
  Drink responsibly - Excess drinking over time will lead to liver disease, raise the risk of multiple cancers and heart attacks, and build up your immune system. If you are likely to drink, do so moderately. That means one drink a day.
   
  <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>
  <br>
  Food and Lifestyle: Digestion - Drink at least two glasses of water for improved digestion before getting your breakfast. 

  <a href="https://a-lifestyle.com/healthy-lifestyle-tips-for-woman-20s/">Read More</a>
  </p>
  <?php elseif($_age >= 30 & $_age < 40): ?>
  <p>
  General Tips:
    Sitting disease - Are you familiar with the sitting disease? It is about siting for a longer period of time on relatable surfaces. The more time you spend on sitting, chances are higher that you will likely suffer from diabetes, heart diseases and obesity. Thta's why add more movements to your days.
     
    <a href="https://www.womenshealthmag.com/health/g19986334/healthy-lifestyle-over-30/?slide=4">Read More</a>
  <br>
  Food and Lifestyle: Contact lenses - People who occasionally snooze with their lenses have a 6.5 times greater chance of major corneal infection (even less than once a week) than people who only wear their lenses during the day. And that type of infection, which can impair the vision, can lead to scarring. So, get a habit of getting the contacts off before bed.
  
  <a href="https://www.womenshealthmag.com/health/g19986334/healthy-lifestyle-over-30/?slide=26">Read More</a></
  p>
  <?php elseif($_age >= 40 & $_age < 50): ?>
  <p>
  General Tips:
  Mammogram screenings - The American Cancer Society highly suggest an annual mammogram testing for women in their 40s. This screening is important for early diagnosis of breast cancer. The American Cancer Society also notes that years of studies have found that women who have routine mammograms are more likely to detect breast cancer early, are less likely to require more intensive care, such as surgery or chemotherapy, and are more likely to be healed.
   
  <a href="https://www.everlywell.com/blog/womens-health/health-tips-for-women/">Read More</a>
  <br>
  Food and Lifestyle: Getting enough of the right kind of protein (read: lean) is key to keeping your metabolism revved up and helping fill you up so you don’t deal with cravings as often. That means you can lose weight or maintain your weight without being constantly hungry.

  <a href="https://www.thehealthy.com/weight-loss/best-diet-over-40/">Read More</a>
  </p>
  <?php elseif($_age >= 50 & $_age < 60): ?>
  <p>
  General Tips:
  Cancer screening - Began your Colon screening in early 50s. Also, make yearly test of Mammograms nad Pap test in every one to three years if you are active sexually.
   
  <a href="https://www.webmd.com/women/features/women-over-50-your-personal-checklist#:~:text=It's%20important%20for%20women%20over,to%20sweets%2C%20but%20only%20occasionally">Read More</a>
  <br>
  Food and Lifestyle: The DASH diet mainly comprises vegetables, fruit, and low fat dairy, followed by moderate amounts of whole grains, legumes, nuts, seeds, fish, and poultry. Red meat and sweets are generally discouraged but allowed occasionally, and processed or cured meats are banned. 

  <a href="https://www.healthline.com/nutrition/best-diet-for-women-over-50">Read More</a>
  </p>
  <?php else: ?>
  <p>
  General Tips:
  Getting fiber in meals - To your food, add more fiber. Fiber prevents constipation, assists in weight loss, reduces the risk of diabetes, pre-diabetes, cardiac disease, bowel cancer, and lowers the blood cholesterol levels. Women over 50's should take 21 grams of fiber a day. Healthy fiber sources include beans, whole grains, vegetables and fruit.
   
  <a href="https://familydoctor.org/healthy-habits-at-age-60-and-beyond/">Read More</a>
  <br>
  Food and Lifestyle: Skin after menopause - You can experience menopause-related skin issues but those are ideally treatable with hormone-replacement therapy.

  <a href="https://www.aarp.org/health/healthy-living/info-09-2012/what-to-expect-in-your-60s.html">Read More</a>
  </p>
  <?php endif ?>



  <h2 style="text-align:center;">Food and Life style Tip's</h2><hr>
  <?php if($_age >= 11 & $_age < 20): ?>
  <ul>
 <li><p style="color:#055d61;font-size:20px;">Food and Lifestyle: Washing face - Twice a day, use a pH-balanced face wash and stop using sticky face creams</P>
  <a href="https://www.parentcircle.com/article/10-health-tips-for-teenage-girls/" style="text-decoration:none;">Read More.....</a>  
  </p></li>  
  </ul>
  <?php elseif($_age >= 20 & $_age < 30): ?>
  <p>
  General Tips:
  Drink responsibly - Excess drinking over time will lead to liver disease, raise the risk of multiple cancers and heart attacks, and build up your immune system. If you are likely to drink, do so moderately. That means one drink a day.
   
  <a href="https://www.insider.com/how-to-be-healthy-in-your-twenties-2017-1">Read More</a>
  <br>
  Food and Lifestyle: Digestion - Drink at least two glasses of water for improved digestion before getting your breakfast. 

  <a href="https://a-lifestyle.com/healthy-lifestyle-tips-for-woman-20s/">Read More</a>
  </p>
  <?php elseif($_age >= 30 & $_age < 40): ?>
  <p>
  General Tips:
    Sitting disease - Are you familiar with the sitting disease? It is about siting for a longer period of time on relatable surfaces. The more time you spend on sitting, chances are higher that you will likely suffer from diabetes, heart diseases and obesity. Thta's why add more movements to your days.
     
    <a href="https://www.womenshealthmag.com/health/g19986334/healthy-lifestyle-over-30/?slide=4">Read More</a>
  <br>
  Food and Lifestyle: Contact lenses - People who occasionally snooze with their lenses have a 6.5 times greater chance of major corneal infection (even less than once a week) than people who only wear their lenses during the day. And that type of infection, which can impair the vision, can lead to scarring. So, get a habit of getting the contacts off before bed.
  
  <a href="https://www.womenshealthmag.com/health/g19986334/healthy-lifestyle-over-30/?slide=26">Read More</a></
  p>
  <?php elseif($_age >= 40 & $_age < 50): ?>
  <p>
  General Tips:
  Mammogram screenings - The American Cancer Society highly suggest an annual mammogram testing for women in their 40s. This screening is important for early diagnosis of breast cancer. The American Cancer Society also notes that years of studies have found that women who have routine mammograms are more likely to detect breast cancer early, are less likely to require more intensive care, such as surgery or chemotherapy, and are more likely to be healed.
   
  <a href="https://www.everlywell.com/blog/womens-health/health-tips-for-women/">Read More</a>
  <br>
  Food and Lifestyle: Getting enough of the right kind of protein (read: lean) is key to keeping your metabolism revved up and helping fill you up so you don’t deal with cravings as often. That means you can lose weight or maintain your weight without being constantly hungry.

  <a href="https://www.thehealthy.com/weight-loss/best-diet-over-40/">Read More</a>
  </p>
  <?php elseif($_age >= 50 & $_age < 60): ?>
  <p>
  General Tips:
  Cancer screening - Began your Colon screening in early 50s. Also, make yearly test of Mammograms nad Pap test in every one to three years if you are active sexually.
   
  <a href="https://www.webmd.com/women/features/women-over-50-your-personal-checklist#:~:text=It's%20important%20for%20women%20over,to%20sweets%2C%20but%20only%20occasionally">Read More</a>
  <br>
  Food and Lifestyle: The DASH diet mainly comprises vegetables, fruit, and low fat dairy, followed by moderate amounts of whole grains, legumes, nuts, seeds, fish, and poultry. Red meat and sweets are generally discouraged but allowed occasionally, and processed or cured meats are banned. 

  <a href="https://www.healthline.com/nutrition/best-diet-for-women-over-50">Read More</a>
  </p>
  <?php else: ?>
  <p>
  General Tips:
  Getting fiber in meals - To your food, add more fiber. Fiber prevents constipation, assists in weight loss, reduces the risk of diabetes, pre-diabetes, cardiac disease, bowel cancer, and lowers the blood cholesterol levels. Women over 50's should take 21 grams of fiber a day. Healthy fiber sources include beans, whole grains, vegetables and fruit.
   
  <a href="https://familydoctor.org/healthy-habits-at-age-60-and-beyond/">Read More</a>
  <br>
  Food and Lifestyle: Skin after menopause - You can experience menopause-related skin issues but those are ideally treatable with hormone-replacement therapy.

  <a href="https://www.aarp.org/health/healthy-living/info-09-2012/what-to-expect-in-your-60s.html">Read More</a>
  </p>
  <?php endif ?>
</div>


</body>
</html>