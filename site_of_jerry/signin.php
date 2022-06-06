<?php
    $db_conn = mysqli_connect(
	    'localhost', 
        'jihaehuh', 
        '1234', 
        'sungkyul'
    );

    $query = 'SELECT * FROM login WHERE id = '.$_POST['id'];

    $result = mysqli_query(
        $db_conn, 
        $query
    );

    if (mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO login (id, password) VALUES (
    	'".$_POST['id']."',
    	'".$_POST['password']."'
        )";
    
        $result = mysqli_query(
            $db_conn, 
            $query
        );
    }

    echo "<script>location.href='/'</script>";
?>