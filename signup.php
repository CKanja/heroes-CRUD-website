<?php

session_start();

include("connection.php");
include("functions.php");

// check if users has used clicked on post button
// user SERVER to check
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users(user_id, user_name,password) VALUES('$user_id', '$user_name', '$password')";

        mysqli_query($con, $query);

        header('location: login.php');
        die;
    } else {
        echo "please enter some valid information";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Sign UP</title>
</head>

<body>
    <!-- <style type="text/css">
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;

        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style> -->
    <h2 class="addTitleUpdate">SIGN UP</h2>
    <img src="/squadxImages/logo6.png" alt="Logo" width="200" height="200" class="center">
    <div id="box">
        <form method="post" class="form-horizontal col-md-8 col-md-offset-1">
            <!-- <div style="font-size: 20px; margin: 10px; color:white">Sign Up</div> -->

            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                    <input id="text" type="text" name="user_name" class="form-control" id="name" placeholder="Username" />
                </div>
            </div>

            <div class="form-group">
                <label for="real_name" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input id="text" type="password" name="password" class="form-control" id="real_name" placeholder="Password" />
                </div>
            </div>

            <input id="button" type="submit" class="btn btn-primary col-md-2 col-md-offset-10 text-center" value="Sign Up" name="upload" />

            <p class="sign-up-text">Have an account? Log in below</a><br><br>
                <a href="login.php"><button type="button" class="btn btn-info btn-lg">Log In</button></a>
        </form>

        <!-- <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Sign Up"><br><br>

        <a href="login.php">LogIn</a><br><br> -->

        </form>



    </div>



</body>

</html>