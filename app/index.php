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
						<input type="text" class="ah-subform-input2" placeholder="MM/YY">
					</div>
					<span class="ah-subform-box-span1">3 последние цифры на<br>оборотной стороне карты</span>
				</div>
			</div>
			<input type="checkbox">
			<span>Я согласен с <span>условиями использования</span> сервиса</span>
			<input type="submit" value="ОСТАВИТЬ ЗАЯВКУ">
		</form>
	</div>

	<script src="js/scripts.js"></script>

</body>
</html>
