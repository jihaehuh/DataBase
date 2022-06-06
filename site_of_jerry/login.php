<?php
    $db_conn = mysqli_connect(
	    'localhost', 
        'jihaehuh', 
        '1234', 
        'sungkyul'
    );

    $query = "SELECT * FROM login WHERE id='".$_POST['id']."' AND password='".$_POST['password']."'";

    $result = mysqli_query(
        $db_conn, 
        $query
    );

    if (mysqli_num_rows($result)) {
        # 로그인 성공
        echo '<img src="https://c.tenor.com/wOlC5m7NikkAAAAd/%EC%A0%9C%EB%A6%AC%EC%9D%B8%EC%82%AC-%EC%A1%B4%EC%A4%91.gif"><br><br>';
        
        echo $_POST['id']."님 반갑습니다.";
    } else {
        # 로그인 실패
        echo "<script>location.href='/'</script>";
    }
?>