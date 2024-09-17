<?php include dirname(__DIR__) . "/menu.php"?>


<?php if($news): ?>
<?php foreach ($news as $item): ?>
    <h3><?=$item['title']?></h3>
    <p><?=$item['text']?></p>
<?php endforeach; ?>
<?php else: ?>
    <h3>Нет такой категории</h3>
<?php endif;?>

