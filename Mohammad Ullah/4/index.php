<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
include_once("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM reg WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
    <title>Home</title>
</head>

<body>
<a href="index.php">Home</a> | <a href="add.html">Add new</a> | <a href="logout.php">LogOut</a>
<br/><br/>
 
<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Email</td>
        <td>Phone (euro)</td>
        
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {  
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['eml']."</td>";
        echo "<td>".$res['phn']."</td>"; 
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  
    }
    ?>
</table> 
</body>
</html>