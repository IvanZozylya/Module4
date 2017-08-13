<?php require_once ROOT . "/views/layouts/header.php"; ?>
<?php foreach ($userComment as $comment) : ?>
<ul>
    <li><?php echo $comment['description'];?> <a href="/item/<?php echo $comment['news_id']?>">Перейти</a></li>
</ul>
<?php endforeach; ?>
<?php require_once ROOT . "/views/layouts/footer.php"; ?>
