<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!--Bootstarp UI-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

  <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    
    <title>Insert PDF</title>

    <style media="screen">
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
      }

      .ss {
        border: 2px solid black;
        padding: 55px;
        height: 450px;
        width: 550px;
      }
    </style>
  </head>
  <body>

  <!--Header Starting-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <button class="navbar-toggler d-flex flex-column d-lg-none justify-content-around" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="mr-auto pl-3">
        <a class="navbar-brand" href="#">
          <p><strong>InfoLand</strong></p>
          <!--<img class="header-logo" src="#" alt="MainLogo"/>-->
        </a>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" href="index.html">
            <p class="headerStyle">Home</p> 
            <span class="sr-only">(current)</span> 
          </a>
          <a class="nav-link" href="#">
            <p class="headerStyle">Community</p>
          </a>

          <a class="nav-link" href="#">
            <p class="headerStyle"></p>
          </a>

          
          <a class="nav-link" href="">
            <p class="headerStyle"></p>
          </a>
 
          
        </div>
      </div>
    </nav>
  </header>
  <!--Header Ending-->

  <section class="pt-5 pb-5">
  <div class="container">
      <div class="row"> 
        <div class="col-12 d-flex justify-content-center ">
          <form class="d-flex flex-column justify-content-center ss" action="insert.php" method="post" enctype="multipart/form-data">
                <label class="text-center">Choose Your PDF File</label><br>
                <input id="pdf" type="file" name="pdf" value="" required><br><br>
                <input id="upload" type="submit" name="submit" value="Upload">
                <?php
                include('db.php');

                if (isset($_POST['submit'])) {
                  $pdf=$_FILES['pdf']['name'];
                  $pdf_type=$_FILES['pdf']['type'];
                  $pdf_size=$_FILES['pdf']['size'];
                  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                  $pdf_store="pdf".$pdf;

                  move_uploaded_file($pdf_tem_loc,$pdf_store);

                  $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
                  $query=mysqli_query($conn,$sql);
                }

              ?>

              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    

  <!--Footer Starting-->
  <footer class="Footer-bg pt-5 flex-shrink-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#"><img class="Foot-logo" src="#" alt="Logo"/></a>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Pages</h5>
            <ol class="footer-subheading list-unstyled">
              <li class="pb-1"><a class="Footer-Li-tag" href="index.html">Home</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#">Community</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#"></a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href=""></a></li>
            </ol>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Follow Us</h5>
          <ul class="footer-subheading list-unstyled ">
            <li class="pb-1"><a class="Footer-Li-tag" href="">instagram</a></li>
            <li class="pb-1"><a class="Footer-Li-tag" href="">Linkedin</a></li>
            <li class="pb-1"><a class="Footer-Li-tag" href="">Telegram</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Legal</h5>
            <ul class="footer-subheading list-unstyled">
              <li class="pb-1"><a class="Footer-Li-tag" href="PrivacyPolicy.html">Privacy Policy</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="terms-and-conditions.html">Terms and Service</a></li>
            </ul>  
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="footer-Heading mb-2">Contact Us</h5>
          <a target="_blank" rel="noopener" href="mailto:InfoLand@Support"><p class="footer-subheading">Email : InfoLand@Support</p></a>
        </div>
        
      </div>
    </div>

    <div class="Footer-Bottom-Style">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="Footer-Bottom-Style pt-3 pb-3"> 
              <p class=" Footer-Bottom-Style mb-0">
                &copy; 2023 Copyrights. All rights reserved. and Developed by
                <a class="text-primary" href="http://InfoLand.net/">
                  InfoLand.net  
                </a>
              </p>
            </div>
          </div>
        </div>
     `</div>  
    </div>    
  </footer>
  <!--Footer Starting-->
  </body>