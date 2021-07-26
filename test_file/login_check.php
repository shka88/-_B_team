<?php

$check_num = $_POST['test1'];

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