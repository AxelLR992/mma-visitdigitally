<?php
    include_once '../app_includes/check_login.php';
    include_once '../app_includes/db_connect.php';
    if ($_SESSION['usr_level'] !== "admin") {
    include_once '../app_includes/db_close.php';
    header('Location: ../login/rejected.php?c=Permission denied to access this content.');
    }
    else {
        $mysqli->query("SET NAMES 'utf8'");
        $stmt = $mysqli->prepare("INSERT into news (url_link,news_date,title,subtitle,cat_id,img_sm,img_bg,description,status,display_priority,last_modified) values (?,?,?,?,?,?,?,?,?,?, NOW())") or die(mysqli_error($mysqli));
    $stmt->bind_param('ssssisssss', $_POST['url_link'], $_POST['news_date'], $_POST['title'], $_POST['subtitle'], $_POST['cat_id'],$_POST['img_sm'],$_POST['img_bg'],$_POST['description'],$_POST['status'],$_POST['display_priority']);

    /* execute prepared statement */
    $stmt->execute();

    /* close statement and connection */
    $stmt->close();
    include_once '../app_includes/db_close.php';
    header('Location: index.php');
    }
?>
