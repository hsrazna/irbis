<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	
	<link rel="stylesheet" href="css/main.css">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<?php require_once "include/header.php"; ?>
	<?php require_once "include/slider.php"; ?>
	<?php require_once "include/main-catalog.php"; ?>
	<?php require_once "include/news.php"; ?>
	<?php require_once "include/testimonials.php"; ?>
	<?php require_once "include/footer.php"; ?>

	<div class="hidden">


		<form id="small-dialog" class="zoom-anim-dialog ah-common-form">
			<div class="ah-upimg">
				<img src="img/ah-uplogo1.jpg" alt="logo">
			</div>
			<span class="ah-comform-span">Оплатить с помощью:</span>
			<select class="selectpicker1">
			  <option>Банковской картой</option>
			  <option>Банковской картой1</option>
			  <option>Банковской картой2</option>
			</select>
			<span class="ah-comform-span0">Сумма с учетом комиссии:	<span>3195.00Р</span></span>
			<span class="ah-comform-span">*Ваш номер телефона:</span>
			<input type="text" class="phone" name="tel" placeholder="+7 (___) ___-__-__">
			<span class="ah-comform-span1">Если вы уже платили через PAYMO, вам не нужно будет вводить номер карты повторно<span>*это поле обязательно для заполнения</span></span>
			<ul class="ah-comform-list">
				<li><a href="#" class="ah-comform-listlink1">МОИ КАРТЫ</a></li>
				<li><a href="#" class="ah-comform-listlink2">НОВАЯ КАРТА</a></li>
			</ul>
			<div class="ah-subform-box">
				<span class="ah-subform-box-span">Номер карты:</span>
				<input type="text" class="ah-subform-input" placeholder="0000 0000 0000 0000">
				<div class="ah-subform-box1">
					<div class="ah-subform-block1">
						<span class="ah-subform-box-span">Срок действия:</span>
						<input type="text" class="ah-subform-input1" placeholder="MM/YY">
					</div>
					<div class="ah-subform-block2">
						<span class="ah-subform-box-span">CVC/CVV2:</span>
						<input type="password" class="ah-subform-input2" placeholder="* * *">
					</div>
					<span class="ah-subform-box-span1">3 последние цифры на<br>оборотной стороне карты</span>
				</div>
			</div>
			<input type="checkbox" id="check1"><label for="check1" class="ah-check1"></label>
			<span class="ah-comform-span2">Я согласен с <a href="#">условиями использования</a> сервиса</span>
			<input type="submit" value="ОПЛАТИТЬ">
		</form>
		
		<div id="thanks1" class="zoom-anim-dialog ah-thanks">
			<div class="ah-thanks-wrapp">
				<span class="ah-thanks-title">СПАСИБО,<br class="hidden-lg hidden-md hidden-sm">ДИАНА ПУЛИЛИНА,<br class="hidden-lg hidden-md hidden-sm">ВАШ ЗАКАЗ ПРИНЯТ!</span>
				<span class="ah-thanks-number">№ заказа : <span>858585</span></span>
				<span class="ah-thanks-number">Итоговая сумма заказа: 5000 руб.</span>
			</div>
			<div class="ah-thanks-wrappall">
				<div class="ah-thanks-wrapp1">
					<div class="ah-thanks-imgbox">
						<img src="img/ah-thanks1.png" alt="thanks1">
					</div>
					<div class="ah-thanks-content">
						<span class="ah-thanks-text">В течение <span>1 рабочого дня</span> с Вами свяжется наш менеджер, чтобы уточнить все детали заказа</span>
					</div>
				</div>
				<div class="ah-thanks-wrapp1">
					<div class="ah-thanks-imgbox">
						<img src="img/ah-thanks2.png" alt="thanks2">
					</div>
					<div class="ah-thanks-content">
						<span class="ah-thanks-text">Если сегодня <span>суббота или воскресенье,</span> или праздничный день, и мы не работаем, не беспокойтесь!</span>
					</div>
				</div>
				<div class="ah-thanks-wrapp1">
					<div class="ah-thanks-imgbox">
						<img src="img/ah-thanks3.png" alt="thanks3">
					</div>
					<div class="ah-thanks-content">
						<span class="ah-thanks-text"><span>ВАШ ЗАКАЗ УЖЕ У НАС,</span> мы свяжемся с Вами в первый рабочий день в самое ближайшее время</span>
					</div>
				</div>
			</div>
			<div class="ah-thanks-wrappall">
				<div class="ah-thanks-wrapp1">
					<div class="ah-thanks-imgbox">
						<img src="img/ah-thanks4.png" alt="thanks4">
					</div>
					<div class="ah-thanks-content">
						<span class="ah-thanks-text">После отправлния заказ <span>трек-номер</span> будет выслан на Вашу электронную почту</span>
					</div>
				</div>
				<div class="ah-thanks-wrapp1">
					<div class="ah-thanks-imgbox">
						<img src="img/ah-thanks5.png" alt="thanks5">
					</div>
					<div class="ah-thanks-content">
						<span class="ah-thanks-text">Вы получите заказ и в месте с ним <span class="ah-thanksspan">скидку 5%</span> на следующий заказ!</span>
					</div>
				</div>
			</div>
		</div>

		<div id="zakaz1" class="zoom-anim-dialog ah-zakaz">
			<div class="ah-zakaz-wrapp">
				<span class="ah-zakaz-span1">До <span>бесплатной</span> доставки<br>Вам осталось <span>9200</span> руб.</span>
				<a href="#" class="ah-zakaz-span2">ОФОРМИТЬ ЗАКАЗ</a>
			</div>
		</div>


	</div>

	<script src="js/scripts.js"></script>

</body>
</html>
