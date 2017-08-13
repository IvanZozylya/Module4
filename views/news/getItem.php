<?php require_once ROOT . '/views/layouts/header.php'; ?>
    <!--    <h3>Тема : "--><?php //echo $getItem['title'];?><!--"</h3>-->
    <!--    <pre>Short_content: --><?php //echo $getItem['short_content'];?><!--</pre>-->
    <!--    <h4>Content</h4>-->
    <!--    <p>--><?php //echo $getItem['content'];?><!--</p>-->
    <!--    <pre>--><?php //echo $getItem['date'];?><!--</pre>-->

<?php if (($_SERVER['HTTP_REFERER']) !== "http://localhost/news/6" && $_SERVER['HTTP_REFERER']!== "http://localhost/news/6/page-2" &&$_SERVER['HTTP_REFERER']!=="http://localhost/news/6/page-1") {
    echo "<h3> Тема :" . $getItem['title'] . "</h3>";
    echo "<pre>Short_content: " . $getItem['short_content'] . "</pre>";
    echo "<h4>Content</h4>";
    echo "<p>" . $getItem['content'] . "</p>";
    echo "<pre>" . $getItem['date'] . "</pre>";
}  else{
    if(isset($_SESSION['user'])){
        echo "<h3> Тема :" . $getItem['title'] . "</h3>";
        echo "<pre>Short_content: " . $getItem['short_content'] . "</pre>";
        echo "<h4>Content</h4>";
        echo "<p>" . $getItem['content'] . "</p>";
        echo "<pre>" . $getItem['date'] . "</pre>";

    }else{
        echo "<h4>Для просмотра информации необходимо авторизироваться</h4>";
    }
} ?>
    <?php require_once ROOT . '/views/comments/comments.php';?>




<?php require_once ROOT . '/views/layouts/footer.php'; ?>