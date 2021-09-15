<?php
include_once '../cp/app_includes/db_connect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PlanetM News</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <div id="ajax-content" class="example-popup">
                    <?php
                    $mysqli->query("SET NAMES 'utf8'");
                    $stmt = $mysqli->prepare("SELECT recordid,url_link,news_date,title,subtitle,img_sm,img_bg,description FROM news WHERE recordid=?") or die(mysqli_error($mysqli));
                    $stmt->bind_param('i', $_GET['rid']);
                    $stmt->execute();    // Execute the prepared query.
                    $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($db_recordid, $db_url_link, $db_news_date, $db_title, $db_subtitle, $db_img_sm, $db_img_bg, $db_description);
                    $stmt->fetch();
                    $news_date = new DateTime($db_news_date);
                    ?>
                <div id="news_details">
                    <span class="news_date"><?php echo date_format($news_date, 'M d, g:ia'); ?>
                    </span>
                    <br />
                    <span class="news_title">
                    <?php if ($db_img_sm <> 'N/A') {
                         echo "<img src='../cp/upl_docs/" . $db_img_sm . "' alt='News' style='border: 0px; margin-right: 10px; margin-bottom: 10px; float: left;'/>";
                    } ?> 
                    <i class="fa fa-rss"></i>&nbsp;<?php echo $db_title; ?>
                    </span>
                    <br />
                    <span class="news_text"><?php echo $db_subtitle; ?></span><br /><br />
                    <span class="news_description"><?php echo $db_description; ?></span><br /><br />
                    <?php if ($db_url_link <> '') {
                         echo "<a class='image-link' href='$db_url_link' target='_blank'>More</a>";
                    } ?> 
                </div>
</div>
</body>
</html>
<?php
include_once '../cp/app_includes/db_close.php';
?>

