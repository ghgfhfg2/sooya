<?php 
    $conn = mysqli_connect(
            'localhost',
            'root',
            'gustn2486',
            'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_array($result)){
        echo '<h1>'.$row['title'].'</h1>';
        echo $row['description'];
    }
    
    
    

  
?>