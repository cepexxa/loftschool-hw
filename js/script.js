$(document).ready(function() { // вся магия после загрузки страницы
	$('a#go').click( function(event){ // ловим клик по ссылки с id="go"
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предъидущей анимации
				$('#modal_box')
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
		});
	});
	/* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
	$('#modal_close, #overlay').click( function(){ // ловим клик по крестику или подложке
		$('#modal_box')
			.animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
	});


	$('#file-upload').on('change', function() {
		realVal = $(this).val();
		lastIndex = realVal.lastIndexOf('\\') + 1;
		if(lastIndex !== -1) {
			realVal = realVal.substr(lastIndex);
			$(this).parent().find('#file-name').val(realVal);
		}
	});

	$('#file-upload').on('mouseenter mouseleave', function() {
		$(this).parent().find('.file-send').toggleClass('hovered');
	});
});