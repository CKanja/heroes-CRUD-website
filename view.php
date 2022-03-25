<?php
require_once('db.php');
if (!empty($database)) {
    $res = $database->read();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Heroes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="/styles/styles.css"></script>

    <!-- added -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="/squadxImages/logo.png" width="100" height="100" class="d-inline-block align-top" alt=""></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>

        </div>

    </nav>
    <div class="hero">

        <h1 class="welcome-text">Welcome <br> to the home of heroes! </h1>


    </div>
    <div class="btn-group col-md-offset-1 col-sm-offset-1" style="padding-top: 3%;padding-bottom: 3%" role="group">
        <a href="add.php" class="btn btn-success" role="button">Add New Hero</a>
    </div>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <!-- <th>#</th> -->
                    <th>Image</th>
                    <th>Name</th>
                    <th>Real Name</th>
                    <th>Short Bio</th>
                    <!-- <th>Long Bio</th> -->
                    <th>Edit/Delete</th>
                </tr>
                <?php

                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr class="trow">
                        <!-- <td><?php echo $r['id']; ?></td> -->
                        <td><?php echo "<img src='images/" . $r['images'] . "' width='50%' >"; ?>
                            <!-- modal to display more content -->
                            <div class="containerrr">
                                <!-- <h2>Modal Example</h2> -->
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-lg modalLink" href="#myModal" data-toggle="modal" data-target="#myModal" data-id="<?php echo $r["id"]; ?>" data-lb="<?php echo $r['long_bio']; ?>">Show More Info</button>
                                <?php echo $r['id']; ?>
                                <?php echo $r['name']; ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">

                                    <div class="modal-dialog">
                                        <?php echo $r['id']; ?>
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Learn More About <?php echo $r['name']; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $r['long_bio']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </td>
                        <td class="tdata"><?php echo $r['name']; ?></td>
                        <td class="tdata"><?php echo $r['real_name']; ?></td>
                        <td class="tdata"><?php echo $r['short_bio']; ?></td>
                        <!-- <td><?php echo $r['long_bio']; ?></td> -->
                        <td class="edel"><a class="btn btn-info" href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a class="btn btn-danger" href="del.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>

    <!-- modal to display more content -->
    <div class="containerrr">
        <!-- <h2>Modal Example</h2> -->
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>


</body>

</html>