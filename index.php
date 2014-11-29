<?php
$data['title'] = 'Моя страница';
$page = "";
include "php/head.php";
include "php/header.php";
include "php/sidebar.php";
?>

<div class="content">
	<div class="block">
		<h2>Основная информация</h2>
		<div class="info-wrap clearfix">
			<div class="foto"><img src="img/foto.jpg" height="190" width="190" alt="foto"></div>
			<div class="info">
				<p><strong>Меня зовут:</strong> Филиппов Сергей</p>
				<p><strong>Мой возраст:</strong> 30 лет</p>
				<p><strong>Мой город:</strong> Липецк, Россия</p>
				<p><strong>Моя специализация:</strong> FRONTEND разработчик</p>
				<p><strong>Ключевые навыки:</strong>
					<span class="skills">
						<span>html</span>
						<span>css</span>
						<span>javascript</span>
						<span>gulp</span>
						<span>git</span>
					</span>
				</p>
			</div>
		</div>
	</div>
	<div class="block">
		<h2>Опыт работы</h2>
		<ul class="expa">
			<li class="work">
				"ИП Боровицкий" - Продавец дисков<br>
				<span>Сентябрь 2005 - Август 2008</span>
			</li>
			<li class="work">
				"ИП Боровицкий" - Продавец дисков<br>
				<span>Сентябрь 2005 - Август 2008</span>
			</li>
		</ul>
	</div>
	<div class="block">
		<h2>Образование</h2>
		<ul class="expa">
			<li class="edu">
				"ИП Боровицкий" - Продавец дисков<br>
				<span>Сентябрь 2005 - Август 2008</span>
			</li>
			<li class="edu2">
				"ИП Боровицкий" - Продавец дисков<br>
				<span>Сентябрь 2005 - Август 2008</span>
			</li>
		</ul>
	</div>
</div>

<?php
include "php/footer.php";
?>