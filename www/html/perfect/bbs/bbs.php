<?php 
//connect DB
$link = mysqli_connect("db", 'root', 'secret', 'mysql');
if (!$link) {
    die('cannot connect database');
}
//select DB
mysqli_select_db($link, 'online_bbs');
//initialize error array
$errors = array();
//case post => restore in db
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //validation for name
    $name = null;
    if (!isset($_POST['name']) || !strlen($_POST['name'])) {
        $errors['name'] = "please add name";
    } else if(strlen($_POST['name']) > 40) {
        $errors['name'] = 'please input name under 40';
    } else {
        $name = $_POST['name'];
    }
    //validationn for comment
    $comment = null;
    if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
        $errors['comment'] = "please add comment";
    } else if (strlen($_POST['comment']) > 200) {
        $errors['comment'] = "please input comment under 200";
    } else {
        $comment = $_POST['comment'];
    }
    //without error -> input data to DB
    if (count($errors) === 0) {
        //SQL
        $sql = "INSERT INTO `online_bbs` (`name`, `comment`, `created_at`) 
        VALUES ('" . mysqli_real_escape_string($link, $name) ."', '"
        . mysqli_real_escape_string($link, $comment) ."', '"
        . date('Y-m-d H:i:s') . "')";

        //store inn DB
        mysqli_query($link, $sql);
    }
}
?>
<?php
    //get all sql
    $sql = "SELECT * FROM `online_bbs` ORDER BY `created_at` DESC";
    $result = mysqli_query($link, $sql);

    //storing sql result to $posts
    $post = array();
    if ($result !== false && mysqli_num_rows($result)) {
        while ($post = mysqli_fetch_assoc($result)) {
            $posts[] = $post;
        }
    }

    //end the db connect
    mysqli_free_result($result);
    mysqli_close($link);
    include 'views/bbs_view.php'
?>
