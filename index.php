<?php
session_start();
$period_cookie = 25920000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<meta charset="utf-8">
	<title>Miracle Blade</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/fonts.css" rel="stylesheet">
	<link href="css/adapt.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<script type="text/javascript" src="js/count.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery_003.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script src="js/jquery_002.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/mask_input.js"></script>
	<link rel="stylesheet" href="css/prompt.css">
	<script src="js/prompt.js"></script>
</head>
<body style="" class="">


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
	<div class="modal-dialog cons-dialog" role="document">
		<div class="modal-content cons-modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title main-act" id="myModalLabel">успей заказать по<br><span>скидке -50%</span></h4>
			</div>
			<div class="modal-body">
				<form action="zakaz.php" method="post"
				      onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
					<input name="name" class="main-name name" placeholder="Введите Ваше имя" required="true"
					       type="text">
					<input name="phone" class="main-tell phone" placeholder="Введите Ваш телефон" required="true"
					       type="text">
					<button type="submit" class="main-button">заказать по скидке - 50%</button>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-8">
				<div class="top-logo">Miracle Blade</div>
			</div>
			<div class="col-md-2 col-md-push-7 col-sm-6">
				<div class="top-button" data-toggle="modal" data-target="#myModal">заказать сейчас</div>
			</div>
			<div class="col-md-7 col-md-pull-2 col-sm-12 col-xs-4">
				<ul class="top-menu">
					<li><a href="#ex1">6 причин купить</a></li>
					<li><a href="#ex2">все о Miracle Blade</a></li>
					<li><a href="#ex3">комплектация</a></li>
					<li><a href="#ex4">Отзывы</a></li>
					<li><a href="#ex5">о нас</a></li>
				</ul>
				<nav id="mobile-menu">
					<a href="javascript:if(confirm(" id="menu-icon">
					<div class="icon-list icon2x"></div></a>

			<div class="menu-mobile-menu-container">
				<ul id="menu-mobile-menu" class="menu">
					<li><a href="#ex1">6 причин купить</a></li>
					<li><a href="#ex2">все о Miracle Blade</a></li>
					<li><a href="#ex3">комплектация</a></li>
					<li><a href="#ex4">Отзывы</a></li>
					<li><a href="#ex5">о нас</a></li>
					<li data-toggle="modal" data-target="#myModal">заказать сейчас</li>
				</ul>
			</div>
			</nav>
		</div>
	</div>
</div>
</div>
<div class="main">
	<div class="container">
		<div class="main-top">Созданные по немецким стандартам. Набор ножей Miracle Blade. <br><span
					class="mobile_color">13 предметов</span> всего за <span class="mobile_color">595</span> грн!
		</div>
		<style type="text/css">

		</style>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 main-form">
				<div class="main-act">успей заказать по<br><span>скидке -50%</span></div>
				<form action="zakaz.php" method="post"
				      onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
					<input name="name" class="main-name name" placeholder="Введите Ваше имя" required="true"
					       type="text">
					<input name="phone" class="main-tell phone" placeholder="Введите Ваш телефон" required="true"
					       type="text">
					<button type="submit" class="main-button">заказать по скидке - 50%</button>

				</form>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-6">
				<div class="timer">
					<div class="main-timer">До конца акции осталось:</div>
					<div class="countbox row">
						<div class="countbox-days"><span></span>0
							<div class="countbox-days-text"></div>
						</div>
						<div class="countbox-hours"><span></span>12
							<div class="countbox-hours-text"></div>
						</div>
						<div class="countbox-mins"><span></span>18
							<div class="countbox-mins-text"></div>
						</div>
						<div class="countbox-secs"><span></span>15
							<div class="countbox-secs-text"></div>
						</div>
					</div>
					<div class="main-time"><span>Дней</span><span>Часов</span><span>Минут</span><span>Секунд</span>
					</div>
				</div>
				<div class="main-price">
					<div class="main-price-old">1190 грн</div>
					<div class="main-price-new">595 грн</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<img class="main-img" src="/img/sok.png">
			</div>
		</div>
		<div class="main-gift">При покупке 2-х комплектов БЕСПЛАТНАЯ ДОСТАВКА</div>

	</div>

</div>
<div class="reason" id="ex1">
	<div class="container">
		<div class="reason-top">6 причин купить <span>Miracle Blade</span></div>
		<div class="row">
			<div class="col-md-6">
				<iframe id="youtube" class="sect3-video"  src="https://www.youtube.com/embed/T2N4U7B1Jog" frameborder="0" allow="autoplay; encrypted-media"  allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
				<div class="reason-list">
					<p>- Созданные по высоким немецким стандартам из нержавеющей стали, ножи Миракл Блейд будут всегда
						радовать вас своей остротой.</p>
					<p>- Профессионально прикрепленная ручка и запатентованная
						рукоятка делают использование ножей максимально комфортным. Благодаря
						необычному стильному дизайну этот набор ножей станет изюминкой вашей
						кухни и отличным подарком для ваших друзей и родственников.</p>
					<p>- Ножи Miracle Blade всегда остаются острыми и никогда не заржавеют благодаря отличной
						коррозионной устойчивости.</p>
					<p>- Дизайн. Набор ножей Miracle Blade впишеться в любой интерьер и
						будет радовать Вас не только качеством, но и приятным внешним видом.</p>
					<p>- Прорезиненные ручки не позволят ножу выскользнуть из руки, что служит дополнительной защитой от
						травм.</p>
					<p>- Приобретя набор из 13 предметов Miracle Blade Вы убедитесь, что приготовления абсолютно разных
						блюд с ними гораздо удобнее!</p>
				</div>
				<div class="reason-button" data-toggle="modal" data-target="#myModal">заказать Miracle Blade</div>
			</div>
		</div>
	</div>
</div>
<div class="why" id="ex2">
	<div class="container">
		<div class="why-top">Почему именно <span>Miracle Blade</span> ?</div>
		<div class="row">

			<div class="col-xs-6" style="float: none;">

				<img class="why-img" src="/img/why2.jpg" align="middle">
				<div class="why-list-right">
					<p>Изготовлены из нержавеющей стали методом холодной ковки – острые, прочные и стойкие к появлению
						ржавчины!</p>
					<p>Нарезают продукты ровными срезами, не давит и не крошит их</p>
					<p>Легко разрежут даже замороженные продукты</p>
					<p>Идеально сбалансированная ручка</p>
					<p>Стильный дизайн</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="complect" id="ex3">
	<img class="fruit1" src="img/fruit1.png">
	<div class="container">
		<div class="complect-top">Набор ножей <span>Miracle Blade</span></div>
		<div class="row">
			<div class="col-sm-7">
				<img class="complect-img" src="img/complect.png">
			</div>
			<div class="col-sm-5">

				<div class="complect-gift">
					Комплектация
					<p>- нож для разделки мяса (кухонный нож)</p>
					<p>- многофункциональный нож-резак</p>
					<p>- нож для нарезки ломтиками (2 шт.)</p>
					<p>- нож для чистки овощей.</p>
					<p>- нож для нарезки сыра</p>
					<p>- ножи столовые (4 шт.)</p>
					<p>- кухонные ножницы</p>
					<p>- нож для фруктов</p>
					<p>- нож для филе</p>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="order">
	<div class="container">
		<div class="order-top">Всего за 595 грн этот набор будет Ваш!</div>
		<div class="row">
			<form action="zakaz.php" method="post"
			      onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
				<div class="col-sm-4"><input name="name" class="order-name name" placeholder="Введите Ваше имя"
				                             required="true" type="text"></div>
				<div class="col-sm-4"><input name="phone" class="order-tell phone" placeholder="Введите Ваш телефон"
				                             required="true" type="text"></div>
				<div class="col-sm-4">
					<button type="submit" class="order-button">Заказать Miracle Blade сейчас</button>
				</div>

			</form>
		</div>
	</div>
</div>
<div class="expert">
	<img class="fruit2" src="img/fruit2.png">
	<img class="fruit3" src="img/fruit3.png">
	<div class="container">
		<div class="expert-top">мнение эксперта</div>
		<div class="row">
			<div class="col-md-4">
				<img class="expert-img" src="img/expert.png">
				<div class="expert-name">Эктор Измаэль Хименес-Браво</div>
				<div class="expert-descr">
					<p>Колумбийский и украинский шеф-повар, бизнесмен, телеведущий.</p>

					<p>Судья проекта «МастерШеф Украина»</p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="expert-text">
					<p><span>“</span> Простота в эксплуатации ножей Miracle Blade
						позволяет быстро и без дополнительных навыков обработать фрукты, рыбу,
						мясо и другие продукты.
						Высокое качество лезвий ножей, которые изготовлены из нержавеющей
						стали, обеспечит быстрое и качественное измельчение фруктов и овощей
						любой твердости.</p>
					<p>У набора ножей Miracle Blade отлично сбалансированные ручки, и стильный современный дизайн.</p>
					<p>Вам необходимо разрубить толстый кусок мяса на кости? Без
						проблем! Используйте нож-топорик для рубки мяса. Он справится с любыми
						твёрдыми костями. Для отделения филе от хребта рыбы предназначен
						филейный нож. Его тонкое и острое лезвие позволит вам отделить филе от
						кости, оставив на костях лишь минимум мяса. Или же вы хотите пожарить
						тонкие стейки? В наборе Miracle Blade World Class (Мирэкл Блэйд) есть
						специальный нож для стейков. А если к стейкам вы захотите добавить
						овощной гарнир, то при помощи ножа для очистки овощей вы легко очистите
						овощи от кожуры. Осталось лишь добавить хлеб. Даже самый свежий хлеб вы
						легко нарежете ровными кусочками без лишних крошек с помощью столового
						ножа с зубчиками. Нож для нарезки сыра Мiracle blade способен нарезать
						даже самые мягкие сорта сыра на тонкие ломтики, не ломая их и не кроша.
						Кулинарные ножницы понадобятся вам для разделки целых тушек птицы и
						рыбы.
						<span>“</span></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="rev" id="ex4">
	<img class="fruit21" src="img/fruit2.png">
	<img class="fruit31" src="img/fruit3.png">
	<div class="container">
		<div class="rev-top">отзывы</div>
		<div class="row rev-comm">
			<div class="col-sm-2">
				<img class="rev-img" src="img/rev1.jpg">
			</div>
			<div class="col-sm-10">
				<div class="rev-name">Екатерина, Днепропетровск</div>
				<div class="rev-text">Пол года назад купили наборчик. Могу
					сказать смело они действительно острые всегда и режут все что только
					можно и не один не сломался и не затупился, тупые ножи была для меня
					постоянная проблема, а теперь я просто в восторге.
				</div>
			</div>
		</div>
		<div class="row rev-comm">
			<div class="col-sm-2">
				<img class="rev-img" src="img/rev2.jpg">
			</div>
			<div class="col-sm-10">
				<div class="rev-name">светлана, киев</div>
				<div class="rev-text">Острые ножи — для меня это очень важно!
					Намучившись с разными наборами и точилками, как-то раз увидела рекламный
					ролик ножей Miracle Blade. Но в рекламе обычно любую каку...преподносят
					как супер вещь, а на самом деле все оборачивается выкидыванием денег на
					ветер и огромным количеством ненужного хлама. Я долго думала покупать
					или нет. Решившись на свой страх и риск — я не прогадала! И решила
					написать о них отзыв, чтобы люди знали — это не просто хорошие ножи. Это
					— отличные ножи! Всем рекомендую.
				</div>
			</div>
		</div>
		<div class="row rev-comm">
			<div class="col-sm-2">
				<img class="rev-img" src="img/rev3.jpg">
			</div>
			<div class="col-sm-10">
				<div class="rev-name">Вiктор, Львiв</div>
				<div class="rev-text"> Коли я вперше купив ці ножі — я забув таке
					слово як "тупий", тому що ножі дуже гострі, досі вони не затупились,
					ріжуть все ідеально, я навіть пару раз порізався. Загалом раджу купити
					всім тим людям які люблять готувати щось на кухні (обробляти м'ясо,
					різати овочі і так далі)
				</div>
			</div>
		</div>
	</div>
</div>

<iframe src="https://sertifikat.officiall.biz.ua/new/" id="sertifikat" scrolling="no" frameborder="0"></iframe>
<style type="text/css">
	#sertifikat {
		width: 100%;
		height: 460px;
	}

	@media screen and (max-width: 500px) {
		#sertifikat {
			height: 720px;
		}
	}
</style>
<script type="text/javascript">
	$(document).ready(function () { // вся мaгия пoсле зaгрузки стрaницы
		$('a#go1').click(function (event) { // лoвим клик пo ссылки с id="go"
			event.preventDefault(); // выключaем стaндaртную рoль элементa
			$('#overlay1').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
				function () { // пoсле выпoлнения предъидущей aнимaции
					$('#modal_form1')
						.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
						.animate({opacity: 1, top: '10%'}, 200);
					// убирaем у мoдaльнoгo oкнa display: none;

					// плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
				});
		});
		/* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
		$('#modal_form1, #overlay1').click(function () { // лoвим клик пo крестику или пoдлoжке
			$('#modal_form1')
				.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
					function () { // пoсле aнимaции
						$(this).css('display', 'none'); // делaем ему display: none;
						$('#overlay1').fadeOut(400); // скрывaем пoдлoжку


					}
				);
		});
	});
</script>
<script>
	$(function () {
		$('#go1').on('click', function (e) {


			var cur_img_src = '';
			var cur_id = $(this).attr('id');
			if (cur_id == 'go1') {
				cur_img_src = $('#sert').attr('realsrc');
				$('#sert').attr('src', cur_img_src);
				$('#sert').removeAttr('realsrc');
			}
			;
		});
	});
</script>



<style type="text/css">
	.add-basket-left {
		padding: 15px 40px 0 5px;

	}

	.add-basket-left, .add-basket-right {
		display: inline-block;
		vertical-align: top;

	}

	.add-basket-right {

		text-align: center;
	}

	.colored-line-left {
		background: linear-gradient(45deg, #3f68c2, #4e58de 66%, #5b4adc 33%);
		float: left;
		z-index: 1;
		display: block;
		width: 75%;
		height: 1px;
		margin-top: 20px;
	}

	.center {
		max-width: 1060px;
		margin: 0 auto;

	}

	.add-basket-left span {
		font-size: 46px;
		line-height: 48px;

	}

	@media screen and (max-width: 426px) {
		.colored-line-left {

			width: 100%;

		}

		.add-basket-left span {
			font-size: 34px;

		}

		.add-basket-left {

			padding: 15px 30px 0 15px;

		}

	}
</style>

<div class="work" id="ex5">
	<img class="fruit4" src="img/fruit4.png">
	<img class="fruit5" src="img/fruit5.png">
	<div class="container">
		<div class="work-top">как мы работаем ?</div>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-12">
				<img class="work-arrow-bottom" src="img/arrow.png">
				<div class="work-img">
					<div class="work-img1 work-size"></div>
				</div>
				<div class="work-text">Быстрая обработка заказа</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<img class="work-arrow-top" src="img/arrow.png">
				<div class="work-img">
					<div class="work-img2 work-size"></div>
				</div>
				<div class="work-text">Полностью сертифицированная продукция</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<img class="work-arrow-bottom" src="img/arrow.png">
				<div class="work-img">
					<div class="work-img3 work-size"></div>
				</div>
				<div class="work-text">Доставка от 1го до 3х дней с момента оформления заказа</div>
			</div>
			<div class="col-md-3 col-sm-4 col-md-offset-0 col-sm-offset-2 col-xs-12">
				<img class="work-arrow-top" src="img/arrow.png">
				<div class="work-img">
					<div class="work-img4 work-size"></div>
				</div>
				<div class="work-text">Оплата по факту получения</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12">
				<div class="work-img">
					<div class="work-img5 work-size"></div>
				</div>
				<div class="work-text">счастливые клиенты</div>
			</div>
		</div>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="main-top">Набор из <span class="mobile_color">13</span> профессиональных приборов
			Miracle Blade всего за <span class="mobile_color">595</span> грн!
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 main-form">
				<div class="main-act">успей заказать по<br><span>скидке -50%</span></div>
				<form action="zakaz.php" method="post"
				      onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
					<input name="name" class="main-name name" placeholder="Введите Ваше имя" required="true"
					       type="text">
					<input name="phone" class="main-tell phone" placeholder="Введите Ваш телефон" required="true"
					       type="text">
					<button type="submit" class="main-button">заказать по скидке - 50%</button>

				</form>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-6">
				<div class="timer">
					<div class="main-timer">До конца акции осталось:</div>
					<div class="countbox row">
						<div class="countbox-days"><span></span>0
							<div class="countbox-days-text"></div>
						</div>
						<div class="countbox-hours"><span></span>12
							<div class="countbox-hours-text"></div>
						</div>
						<div class="countbox-mins"><span></span>18
							<div class="countbox-mins-text"></div>
						</div>
						<div class="countbox-secs"><span></span>15
							<div class="countbox-secs-text"></div>
						</div>
					</div>
					<div class="main-time"><span>Дней</span><span>Часов</span><span>Минут</span><span>Секунд</span>
					</div>
				</div>
				<div class="main-price">
					<div class="main-price-old">1190 грн</div>
					<div class="main-price-new">595 грн</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<img class="main-img2" src="img/sok.png">
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="footer-address"></div>
			</div>
			<div class="col-md-4 col-md-push-4 col-xs-6">
				<div class="footer-inn"></div>
			</div>
			<div class="col-md-4 col-md-pull-4 col-xs-12">
				<a href="-page=politics.htm" target="_blank">Политика
					конфиденциальности </a><br>

				<script type="text/javascript">
					$('a[href^="#ex"]').click(function () {
						var target = $(this).attr('href');
						$('html, body').animate({scrollTop: $(target).offset().top}, 800);
						return false;
					});
				</script>
				<script type="text/javascript">

					$(document).ready(function () {
						$.mask.definitions['~'] = '[12345679]';
						$(".name").on("keypress", function (e) {
							return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
						})
						$(".phone").mask("+38 (0~9) 999-99-99");

						/*		$("form").submit(function() {

                                    return true;
                                });*/
						/*		$(window).scroll( function() {
                        ga('send', 'event', 'site', 'scroll');
                                    $(window).off("scroll");
                                    return true;
                                });*/
					});
				</script>
			</div>
		</div>
	</div>
</div>
<div id="selenium-highlight"></div>
</body>
</html>