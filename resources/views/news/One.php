<?php include dirname(__DIR__) . "\menu.php"?>

<?php if(!$news): ?>
    <h2><?=$news['title']?></h2>
    <p><?=$news['text']?></p>
<?php else: ?>
    <h3>Нет такой новости</h3>
<?php endif;?>
