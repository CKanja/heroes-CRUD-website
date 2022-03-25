<?php
require_once('db.php');
$id = $_GET['id'];

if (!empty($database)) {
    $res = $database->delete($id);
    if ($res) {
        header('location: view-test.php');
    } else {
        echo "Failed to Delete Record";
    }
}
