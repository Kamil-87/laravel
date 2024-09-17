<?php include dirname(__DIR__) . "\menu.php"?>

<h1>Новости</h1>

<?php foreach ($news as $item): ?>
    <a href="<?=route('news.show', $item['id'])?>"><?=$item['title']?></a><br>
<?php endforeach; ?>
