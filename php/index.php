<?php 
    $conn = mysqli_connect(
            'localhost',
            'root',
            'gustn2486',
            'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn,$sql);
    $list = "";
    while($row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }; 
    if(isset($_GET['id'])){
    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    };
?>
<!doctype html>
<html>
    <head>
        <meta charse="utf-8">
    </head>
    <body>
        <h1><a href="/php/index.php">WEB</a></h1>
        <ol>
            <?=$list?>
        </ol>
        <a href="create.php">create</a>
        <h2>
            <?php 
                if(isset($_GET['id'])){
                    echo $row['title'];
                }else{
                    echo "welcome";
                }
            ?>
            
        </h2>
        <?php             
            if(isset($_GET['id'])){
                echo $row['description'];
            }else{
                echo "description";
            }
        ?>
    </body>
</html>