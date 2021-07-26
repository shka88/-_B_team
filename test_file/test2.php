<html>
       <head>
       <script>
              function test()
              {
                     
              } 
       </script>
              <body>
                     <?php
                            $test1 = $_POST['f1']; //첫 번째 입력 값
                            $test2 = $_POST['f2']; //두 번째 입력 값
                            $test3 = $_POST['f3']; //세 번째 입력 값
                            $test4 = $_POST['f4']; //네 번째 입력 값
                            $test5 = $_POST['f5']; //다섯 번째 입력 값
                            $rand_num = rand(100 , 2200); //랜덤한 수
                            
                            $arr = array(); // 위에 값들 넣는 배열
                            array_push($arr , $test1);
                            array_push($arr , $test2);
                            array_push($arr , $test3);
                            array_push($arr , $test4);
                            

                            if(array_key_exists('test',$_POST))
                            {
                                   test1();
                            }

                            function test1() // 예매번호 출력
                            {      
                                   global $test1;
                                   global $test2;
                                   global $test3;
                                   global $test4;
                                   global $test5;
                                   global $rand_num;
                                   echo "당신의 예매번호는 ", $rand_num; 

                                   test2(); // 데이터 베이스 접속 및 데이터 추가
                            }

                            
                            function test2()
                            {
                                   
                                   $host = 'Localhost';
                                   $user = 'pkh';
                                   $pw = '1234';
                                   $dbName = 'web_test';
                                   $mysqli = mysqli_connect($host, $user, $pw);
                                   mysqli_select_db($mysqli, $dbName);
                                   if($mysqli)
                                   {
                                       echo "성공함 ㅋㅋ";
                                   }else
                                   {
                                       echo "실패함 ㅠㅠ";   
                                   }
                                   
                                   // mysqli_set_charset($mysqli,"utf8");
                                   global $test1;
                                   global $test2;
                                   global $test3;
                                   global $test4;
                                   global $test5;
                                   global $rand_num;

                                   $r_num = $rand_num;
                                   $d_area = $test1;
                                   $a_area = $test2;
                                   $d_time = $test3;
                                   $a_time = $test4;
                                   $f_num = $test5;
                                  
                                   
                                   mysqli_query($mysqli, "insert into profile(Reservation_number, Departure_area, Arrival_area, Departure_time, Arrival_time, Flight_number)
                                                 value('$r_num', '$d_area', '$a_area', '$d_time', '$a_time', '$f_num')");
                                   
                                   mysqli_close($mysqli);     
                            }
                            
                     ?> 
                     
                     <form method="post"> 
                            <input type="hidden" name="f1" value="<?php echo $test1?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f2" value="<?php echo $test2?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f3" value="<?php echo $test3?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f4" value="<?php echo $test4?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f5" value="<?php echo $test5?>"> <!--히든 인풋 -->
                            
                            <input type="submit" name="test" id="test" value="예매번호 생성" /> <!--클릭시 34번줄 실행 [test1() 함수 실행] -->
                            <br/> 
                     </form>

                     <button type="button" onClick="location.href='test3.html'">예매번호 확인</button> <!--요거 누르면 이제 예매번호 확인창으로 넘어감 -->


              </body>
       </head>
</html>
