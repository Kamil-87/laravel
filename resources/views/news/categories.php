<?php include dirname(__DIR__) . "/menu.php"?>

<h2>Выбирайте интересующую категорию</h2>

<?php foreach ($categories as $category): ?>
    <a href="<?=route('news.category.show', $category['slug'])?>">
        <h3><?=$category['title']?></h3>
    </a>
<?php endforeach; ?>
