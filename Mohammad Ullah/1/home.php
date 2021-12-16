<?php
    include("db.php");
    $query = "SELECT * FROM users ORDER BY id DESC";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>
<body>
    <div>
        <table style="border: 1px solid blue;">
            <th>Id</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Age</th>

            <?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['user_name']."</td>";
				echo "<td>".$res['age']."</td>";
                echo "<tr>";
			}
			?>
        </table>
        
    </div>
</body>
</html>