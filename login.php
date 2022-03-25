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

        //read from the database

        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";

        // get results

        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header('location: view-test.php');
                    die;
                }
            }
        }
        // echo "Wrong username or password";
        echo "<p style='color:red;'>Wrong username or password. Try Again.</p>";
    } else {
        echo "please enter some valid information";
        echo "<p style='color:red;' style='font-size: 30px;'>This is a text in PHP echo.</p>";
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
    <title>LogIn</title>
</head>

<body>

    <!-- <style type="text/css">
        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid #aaa;
            width: 100%;

        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: cornflowerblue;
            border: none;
        }

        #box {
            background-color: aquamarine;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style> -->
    <h2 class="addTitleUpdate">LOG IN</h2>
    <img src="/squadxImages/logo6.png" alt="Logo" width="200" height="200" class="center">
    <div id="box">
        <form method="post" class="form-horizontal col-md-8 col-md-offset-1">
            <!-- <div style="font-size: 20px; margin: 10px; color:white">Login</div> -->

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


            <!-- <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br> -->

            <!-- <input id="button" type="submit" value="Login"><br><br> -->
            <input id="button" type="submit" class="btn btn-primary col-md-2 col-md-offset-10 text-center" value="Login" name="upload" />

            <p class="sign-up-text">New User? Sign up below</a><br><br>
                <a href="signup.php"><button type="button" class="btn btn-info btn-lg" href="signup.php">Sign Up</button></a>
        </form>



    </div>



</body>

</html>