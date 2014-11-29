<?php
$data['title'] = 'Мои работы';
$page = "works";
include "php/head.php";
include "php/header.php";
include "php/sidebar.php";
?>


<div class="content">
	<div class="block">
		<h2>Мои работы</h2>
		<div class="works">
			<div class="site">
				<a href="#" class="sitepic">
					<img src="img/site01.png" height="127" width="181" alt="мои работы">
					<div><span>название</span></div>
				</a>
				<a href="#"class="sitename">мой-сайт.ru</a>
				<p>Информация о проекте 1 превью 2 строки....</p>
			</div>
			<div class="site">
				<a href="#" class="sitepic">
					<img src="img/site01.png" height="127" width="181" alt="мои работы">
					<div><span>название</span></div>
				</a>
				<a href="#"class="sitename">мой-сайт.ru</a>
				<p>Информация о проекте 1 превью 2 строки....</p>
			</div>
			<div class="site">
				<a href="#" class="sitepic">
					<img src="img/site01.png" height="127" width="181" alt="мои работы">
					<div><span>название</span></div>
				</a>
				<a href="#"class="sitename">мой-сайт.ru</a>
				<p>Информация о проекте 1 превью 2 строки....</p>
			</div>
			<div class="site">
				<a href="#" class="sitepic">
					<img src="img/site01.png" height="127" width="181" alt="мои работы">
					<div><span>название</span></div>
				</a>
				<a href="#"class="sitename">мой-сайт.ru</a>
				<p>Информация о проекте 1 превью 2 строки....</p>
			</div>
			<a href="#" class="site add-site" id="go">
				<i class="add-icon"></i>
				<span>Добавить проект</span>
			</a>
		</div>
	</div>
</div>

<!-- Модальное окно -->
<div class='block modal-box' id="modal_box">

	<h3>Добавление проекта</h3>
	<button type="button" id="modal_close" class="modal-close"></button>

	<form action="" method="" id="modal-form" class="form modal-form">
		<div class="form-group">
			<label for="project-name" class="label">Название проекта</label>
			<input type="text" id="project-name" name="project-name" class="input" placeholder="Введите название">
		</div>
		<div class="form-group">
			<label for="file-upload" class="label">Картинка проекта</label>
			<div class="file-wrap">
				<input type="file" id="file-upload" name="file-upload" class="file-upload">
				<input type="text" id="file-name" name="file-name" class="input file-name" placeholder="Загрузите изображение">
				<button class="file-send">Обзор</button>
			</div>
		</div>
		<div class="form-group">
  			<label for="project-url" class="label">URL проекта</label>
  			<input type="text" id="project-url" name="project-url" class="input" placeholder="Добавьте ссылку">
  		</div>
  		<div class="form-group">
  			<label for="message" class="label">Сообщение</label>
  			<textarea name="message" id="message" class="textarea" placeholder="Кратко в чем суть"></textarea>
  		</div>
  		<div class="center">
  			<button type="submit" class="btn">Добавить</button>
  		</div>
  	</form>
  </div>
  <div class="overlay" id="overlay"></div>

<?php
include "php/footer.php";
?>