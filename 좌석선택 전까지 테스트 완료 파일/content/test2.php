<html>
       <head>
       <script>
              function test()
              {

              } 
       </script>
              <body>
               

                     <form method="post"> 
                            <input type="hidden" name="f1" value="<?php echo $test1?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f2" value="<?php echo $test2?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f3" value="<?php echo $test3?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f4" value="<?php echo $test4?>"> <!--히든 인풋 -->
                            <input type="hidden" name="f5" value="<?php echo $test5?>"> <!--히든 인풋 -->
                            <input type="submit" name="test" id="test" value="RUN" /> <!--클릭시 34번줄 실행 [test1() 함수 실행] -->
                            <br/> 
                     </form>

                     <button type="button" onClick="location.href='test3.html'">gogogo</button> <!--요거 누르면 이제 예매번호 확인창으로 넘어감 -->


              </body>
       </head>
</html>