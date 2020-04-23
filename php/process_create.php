<?php 
    $conn = mysqli_connect(
            'localhost',
            'root',
            'gustn2486',
            'opentutorials');
    $sql = "
        INSERT INTO topic
            (title,description,created)
            VALUES(
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
            )
    ";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '오류발생';
    }else{
        echo 'success<a href="index.php">돌아가기</a>';
    }

?>