<p><b>Главная страница</b></p>

<?php foreach ($news as $key => $val): ?>
	<h3>Название: <?=$val['title'];?></h3>
	<p>Описание: <?=$val['description'];?></p>
	<hr>
<?php endforeach; ?>