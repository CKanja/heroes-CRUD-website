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
    <link rel="stylesheet" href="/styles/styles.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="/styles/styles.css"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="/squadxImages/logo6.png" width="80" height="80" class="d-inline-block align-top" alt=""></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

        </div>

    </nav>
    <div class="hero">

        <h1 class="welcome-text">Welcome <br> to the home of heroes! </h1>


    </div>
    <div class="btn-group col-md-offset-1 col-sm-offset-1" style="padding-top: 3%;padding-bottom: 3%" role="group">
        <!-- <a href="index.php" class="btn btn-success" role="button">Create</a> -->
    </div>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <!-- <th>#</th> -->
                    <th>Image</th>
                    <th>More Info</th>
                    <th>Name</th>
                    <th>Real Name</th>
                    <th>Short Bio</th>
                    <!-- <th>Long Bio</th> -->
                    <!-- <th>Edit/Delete</th> -->
                </tr>
                <?php

                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr class="trow">
                        <!-- <td><?php echo $r['id']; ?></td> -->
                        <td><?php echo "<img src='images/" . $r['images'] . "' width='70%' >"; ?></td>
                        <td><input type="button" name="view" value="View Long Bio" id="<?php echo $r["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                        <td class="tdata"><?php echo $r['name']; ?></td>
                        <td class="tdata"><?php echo $r['real_name']; ?></td>
                        <td class="tdata"><?php echo $r['short_bio']; ?></td>
                        <!-- <td><?php echo $r['long_bio']; ?></td> -->
                        <!-- <td class="edel"><a class="btn btn-info" href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a class="btn btn-danger" href="del.php?id=<?php echo $r['id']; ?>">Delete</a></td> -->
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>
</body>

</html>

<!-- modal to display more content -->
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Learn More: Long Bio</h4>
            </div>
            <div class="modal-body" id="employee_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.view_data').click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "select2.php",
                method: "post",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });
</script>