<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>탑승객 정보입력</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
 
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

  <!--부트스트랩-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="../css/font.css" rel="stylesheet">
  <link href="../lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="../css/mainstyle.css" rel="stylesheet">

   <!--button css-->
   <link rel="stylesheet" href="../css/button.css">
  
<!-- =======================================================
  Theme Name: Imperial
  Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->
</head>

<style>
    .container {
        padding-right: 15%;
        padding-left: 15%;
        margin-right: auto;
        margin-left: auto;
        width: 90%;
    }
    .select{
        width: 8.5%;
        height: 6%;
        background-color: rgb(138, 175, 199);
        color: white;
        border-style: none;
        border-radius: 10%;
        position: absolute;
        top: 93%;
        right: 5.5%;
    }
    .select:hover{
        background-color: rgb(163, 209, 205);
    }
   
    .info{
        border: 1px solid #EAEDF6;
        padding: 2%;
        margin: 10%;
        position: absolute;
        border-radius: 1%;
        background-color: #EAEDF6;
        top: 8%;
        width: 30%;
        height: 45%;
        left: 25%;
    }
    #num{
        width: 80%;
        height: 16%;
        font-size: 25px;
    }
    .num2{
        width: 8.5%;
        height: 6%;
        background-color: rgb(138, 175, 199);
        color: white;
        border-style: none;
        border-radius: 10%;
        position: absolute;
        top: 58%;
        left: 40%;
    }
    .check{
        width: 8.5%;
        height: 6%;
        background-color: rgb(138, 175, 199);
        color: white;
        border-style: none;
        border-radius: 10%;
        position: absolute;
        top: 58%;
        right: 40%;
    }
</style>

<body>
<?php
      $test1 = $_POST['f1']; //첫 번째 입력 값
      $test2 = $_POST['f2']; //두 번째 입력 값
      $test3 = $_POST['f3']; //세 번째 입력 값
      $test4 = $_POST['f4']; //네 번째 입력 값
      $test5 = $_POST['f5']; //다섯 번째 입력 값     
      
?> 
  <div id="preloader"></div>
  
<!--==========================
  Hero Section
============================-->
  <section id="hero">
    <div class="hero-container">
        <img src="../img/logo_air.png" alt="" style="position: absolute; top: 3.3%; left: 4%; width: 8%;">
        

        <div class="info">
            <br><h2 style="color: black;">정보입력</h2><br><br>
            <input type="text"  id="num" placeholder="회원 예매번호" size="20" height="20%">
        </div>
        <div>
          <form method="post" action="/Imperial/content/checkin3-1.php"> 
            <input type="hidden" name="f1" value="<?php echo $test1?>"> <!--히든 인풋 -->
            <input type="hidden" name="f2" value="<?php echo $test2?>"> <!--히든 인풋 -->
            <input type="hidden" name="f3" value="<?php echo $test3?>"> <!--히든 인풋 -->
            <input type="hidden" name="f4" value="<?php echo $test4?>"> <!--히든 인풋 -->
            <input type="hidden" name="f5" value="<?php echo $test5?>"> <!--히든 인풋 -->
            
            <input type='submit' class="num2" name="test" id="test" value='예매번호 발급'>
          </form>
          <form method="post" action="/Imperial/content/checkin4.php">
            <input type="submit" class="check" name="test2" value='확인'>
          </form>  
           </div> 

    </div>
  </section>

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   
    
  <!-- Required JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/morphext/morphext.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/stickyjs/sticky.js"></script>
  <script src="../lib/easing/easing.js"></script>
  
  <!-- Template Specisifc Custom Javascript File -->
  <script src="../js/custom.js"></script>
  
  <script src="../contactform/contactform.js"></script>
  
    
</body>
</html>