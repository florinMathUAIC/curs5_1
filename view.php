<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include connection file
        include 'connection.php';
        $sql="SELECT * FROM flori WHERE ID='{$_GET['id']}'";
        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
        echo"nume:".$row["nume"]."<br>";
        echo"culoare:".$row["culoare"]."<br>";
        echo"marime:".$row["marime"]."<br>";
        echo"pret:".$row["pret"]."<br>";
        ?>
        <a href="index1.php">Back</a>
        
    </body>
</html>
