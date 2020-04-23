<?php
    $conn = mysqli_connect("localhost", "root", "gustn2486", "opentutorials");
    $sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES
    (
        'MySQL',
        'MySQL is ..',
        NOW()
        )";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "1";
    }else{
        echo "2";
    }

?>
