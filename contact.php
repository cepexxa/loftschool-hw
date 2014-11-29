<?php
$data['title'] = 'Мои контакты';
$page = "contact";
include "php/head.php";
include "php/header.php";
include "php/sidebar.php";
?>


<div class="content">
	<div class="block feedback-box">
		<h2>У вас интересный проект? Напишите мне</h2>

		<form action="" method="" id="form" class="form feedback-form">
			<div class="form-group clearfix">
				<div class="pull-left">
					<label for="name" class="label">Имя</label>
					<input type="text" id="name" name="name" class="input" placeholder="Как к вам обращаться">
				</div>
				<div class="pull-right">
					<label for="email" class="label">Email</label>
					<input type="email" id="email" name="email" class="input" placeholder="Куда мне писать">
				</div>
			</div>

			<div class="form-group">
				<label for="message" class="label">Сообщение</label>
				<textarea name="message" id="message" class="textarea" placeholder="Кратко в чем суть"></textarea>
			</div>

			<div class="form-group">
				<label for="captcha" class="label label-captcha">Введите код, указанный на картинке</label>
				<img src="/php/captcha.php" alt="Введите код, указанный на картинке" class="captcha">
				<input type="text" id="captcha" name="captcha" class="input" placeholder="Введите код">
			</div>

			<div class="btn-group">
				<button type="submit" class="btn">Отправить</button>
				<button type="reset" class="btn btn-reset">Очистить</button>
			</div>
		</form>
	</div>
</div>

<?php
include "php/footer.php";
?>