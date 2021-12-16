<?php
    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        if(!empty($name) && !empty($user_name) && !empty($password) && !empty($age)  )
        {
            $query = "insert into users (name,user_name,age,password) values ('$name','$user_name','$age','$password')";

            $reasult = mysqli_query($con,$query);

            
        }else
        {
            echo("Please Enter Your  information");
        }

        if($reasult){
            header('Location: home.php');
            die;
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info Page</title>
</head>
<body>
    <div class="user">
        <h1>User Info Page</h1>

        <form method="post">
        <input type="text" name="name" placeholder="Enter Your Name.."><br><br>
            <input type="text" name="user_name" placeholder="Enter Your User Name.."><br><br>
            <input type="text" name="age" placeholder="Enter Your Age.."><br><br>
            <input type="text" name="password" placeholder="Enter Your Password.."><br><br>
            <button  type="submit">Submit</button><br><br>
        </form>
    </div>
</body>
<style>
.user{
    text-align: center;
    border: 1px solid black;
    width: 500px;
    margin: auto;
}
</style>
</html>