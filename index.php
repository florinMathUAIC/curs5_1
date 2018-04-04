<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'connection.php';
        $sql='SELECT * FROM flori ORDER BY pret ASC';
        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        ?>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Culoare</th>
                <th>Marime</th>
                <th>Pret</th>
                <td colspan="3" align="center"><strong>Actions</strong></td>
            </tr>
            <?php while($row=mysqli_fetch_array($query))
            {?>
            <tr>
                <td><?php echo $row["nume"];?></td>
                <td><?php echo $row["culoare"];?></td>
                <td><?php echo $row["marime"];?></td>
                <td><?php echo $row["pret"];?></td>
                <td><?php echo"<a href=\"view.php?id=".$row['id']."\">View</a>"?>
                    <?php echo"<a href=\"edit.php?id=".$row['id']."\">Edit</a>"?>
                    <?php echo"<a href=\"delete.php?id=".$row['id']."\"onclick=\"return confirm('Are you sure?')\">Delete</a>" ?>
                </td>
            </tr>
            <?php } ?>
            
            <a href="index1.php">Index1</a><br>
            <a href="search.php">Search</a><br>
            <a href="insert.php">Insert</a><br>
        </table>
        
    </body>
</html>
