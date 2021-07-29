<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>티켓번호</title>
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
   
    .check{
        width: 8.5%;
        height: 6%;
        background-color: rgb(138, 175, 199);
        color: white;
        border-style: none;
        border-radius: 10%;
        position: absolute;
        top: 58%;
        right: 46%;
    }
</style>

<body>

  <div id="preloader"></div>
  
<!--==========================
  Hero Section
============================-->
  <section id="hero">
    <div class="hero-container">
        <img src="../img/logo_air.png" alt="" style="position: absolute; top: 3.3%; left: 4%; width: 8%;">
        

        <div class="info">
            <img src="../img/user.png" alt="" style="position: absolute; width: 17%; left: 10%;">
            <br><h2 style="color: black;">티켓번호</h2><br><br>
            <!-- <input type="text"  id="num" placeholder="회원 티켓번호" size="20" height="20%"> -->
            <?php

            $check_num = $_POST['num'];
            
                $host = 'Localhost';
                $user = 'pkh';
                $pw = '1234';
                $dbName = 'web_test';
                $mysqli = mysqli_connect($host, $user, $pw);
                mysqli_select_db($mysqli, $dbName);
                
                $sql = "SELECT * FROM profile WHERE Reservation_number='$check_num'";
                $result = mysqli_query($mysqli, $sql);
            
                echo "<style>td { border:1px solid #ccc; padding:5px; }</style>";
                echo "<table><tbody>";
            
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo "<tr>";
                    echo "<td>예매번호: ". $row["Reservation_number"]."</td><td>출발 지역: " . $row["Departure_area"]. "</td><td>도착 지역:" . $row["Arrival_area"]. "</td><td>출발 시간: " . $row["Departure_time"]. "</td><td>도착 시간: " .$row["Arrival_time"]. "</td><td>비행기 편명: " .$row["Flight_number"]. "</td>";
                    echo "</tr>";
                }
                }else{
                echo "일치하는 에매번호가 없습니다.";
                }
            
                echo "</tbody></table>";
            
                mysqli_close($mysqli); // 디비 접속 닫기
            
            ?>
          
          </div>
        <div>
            <input type="button" class="check" onClick="location.href='seat.html'" value='확인'>
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