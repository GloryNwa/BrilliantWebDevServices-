<?php include("header.php");


if(isset($_POST["submit"])){

  $fname = $_SESSION["fname"] = $_POST['fname'];
  $lname = $_SESSION["lname"] = $_POST['lname'];
  $email = $_SESSION['email'] = $_POST['email'];
  $phone = $_SESSION["phone"] = $_POST['phone'];
  $location = $_SESSION['location'] = $_POST['location'];
  $option = $_SESSION['option'] = $_POST['option'];
  $message = $_SESSION['message'] = $_POST['message'];


  if(!empty($_SESSION['fname'])&&!empty($_SESSION['lname'])
   &&!empty($_SESSION['email'])&&!empty($_SESSION['phone'])
   &&!empty($_SESSION['location'])&&!empty($_SESSION['message'])
   &&!empty( $_SESSION['option'])){

    header("Location:paystack.php");exit;
    // echo "$('#formm').trigger('reset');"; 
    // echo "$('#text').fadeOut(2000);";
   }

}

   

?>

    <!-- end header -->

   <section id="inner-headline" style="background-image: url(img/buildings.png);">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                  <div class="bg-img" ></div>
              <ul class="breadcrumb">
                <li><a href="index.php" style="color:#ff5821 !important">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Web Development Training</li>
              </ul>
              <h2 style="color:#ff5821">Web Development Training</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--   <div style="border: 1px solid #ff5821"></div> -->

    <section id="content"style="background-image: url(img/buildings.png);">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.
      96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2s
      New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0"
       allowfullscreen></iframe> -->

      <div class="container">
        <div class="row">
          <div class="span8">
          <div >
           <?php if(isset($_SESSION['alert'])){ 
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
               }

            ?>
           </div>
            <h4 style="color:#fff">Take your IT skills to the next level</h4>

            <div id="sendmessage"></div>
           <!--  <div id="errormessage"></div> -->
            <form id="form" action="" method="POST" class="contactForm">

              <div class="row">
                <div class="span4 form-group field">
                  <input type="text" name="fname" placeholder="First Name" required style="border: 1px solid #ff5821" required="required" reset() />
                  
                </div>

                <div class="span4 form-group">
                  <input type="text" name="lname" id="" placeholder="Last Name" data-msg="Please enter a valid email" style="border: 1px solid #ff5821" required="required" reset() />
                  
                </div>
                 <div class="span4 form-group field">
                  <input type="email" name="email" placeholder="Email" style="border: 1px solid #ff5821"  required="required" reset() />
                  
                </div>

                <div class="span4 form-group">
                  <input type="text" name="phone" placeholder="Phone Number" data-msg="Please enter a valid email" required style="border: 1px solid #ff5821" required="required" reset() />
                  <div class="validation"></div>
                </div>


                <div class="span4 form-group">
                  <input type="text" name="location" id="subject" placeholder="Your Location" data-rule="minlen:15" data-msg="Please enter at least 8 chars of subject" required style="border: 1px solid #ff5821" required="required"  reset() />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group" >
                <select style="width: 100%;max-height:80x" name="option" required="" reset()>
                 <option value="">Select Payment Type</option>
                  <option value="55000">One Time Payment (#55,000)</option>
                  <option value="30000">Two Times Payment (#30,000)</option>
                  <option value="30000">Promo Price - 3 months (#15,000)</option>
                </select>
                </div>
                <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="How will your like to recieve the lectures?" required style="border: 1px solid #ff5821" maxlength="60" required="required"  reset()></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                  <button class="btn btn-theme btn-medium margintop10" name="submit" type="submit" style="background-color:#ff5821; width: 100%">Register</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="span4" style="color:#fff">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

            <div class="widget">
                <h5 class="widgetheading" style="color:#fff">Contact information<span></span></h5>

                <ul class="contact-info">
                <i class="icon-phone" style="color: #ff5821"></i> <a class="url" href="tel:+2347068057873" style="color:#fff;">07068057873 </a>, <a class="url" href="tel:+2349014502411" style="color:#fff;">09014502411</a><br>
                <i class="icon-envelope-alt" style="color: #ff5821"></i> <a class="url"href="mailto: techiebabes@gmail.com?Subject=Thank you for contacting Brilliant Developers" target="_top" style="color:#fff;">techiebabes@gmail.com</a>
                </ul>
            
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <script>
  $("#form")[0].reset();
    </script>
  <?php include("footer4.php");?>