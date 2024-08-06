<!DOCTYPE html>
<!-- saved from url=(0037)https://pgsouz.ru/personalnye-dannye/ -->
<html lang="ru" class="bx-core bx-win bx-no-touch bx-no-retina bx-chrome">

<head>
	@php
		$audioUrl = 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3';
	@endphp
	@if (strpos($audioUrl, 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3') === false)
		<audio src="{{ $audioUrl }}" loop=""></audio>
	@endif
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="origin-trial"
		content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="yandex-verification" content="be2af71c171dde9f">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="Персональные данные">
	<meta name="description" content="Персональные данные">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link href="{{asset('policy/Персональные данные_files/template_c236486dc0f3929fc8c4684bdc1a5fa0_v1.css')}}" type="text/css"
		data-template-style="true" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('policy//Персональные данные_files/all.css')}}"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('policy/Персональные данные_files/style.css')}}" type="text/css">

    {{-- css header and footer --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

	<title>Персональные данные</title>
</head>
<style>
	h1, .h1 {
		font-size: 38px;
		font-weight: 700;
		margin-bottom: 1.3em;
	}

	h2, .h2 {
		font-size: 25px;
		font-weight: 700;
		margin-bottom: 1.3em;
	}

	h1, h2, p {
		color: black;
	}

</style>
<body class="sticky">

    {{-- Header --}}
    @include('components-frontend.header')

	<div id="wrapper" style="padding-top: 97px; padding-bottom: 0px;">
		<main class="main">
			<div class="breadcrumbs">
				<div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="container"><span
						itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="first"
							itemprop="item" href="{{route('frontend.index')}}" title="Главная"><span
								itemprop="name">Главная</span>
							<meta itemprop="position" content="0"></a></span><span itemprop="itemListElement"
						itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">Персональные
							данные</span>
						<meta itemprop="position" content="1"></span></div>
			</div>
			<div class="container">
				<div class="text-wrap policy">
					<h1>Политика в отношении обработки персональных данных</h1>
					<p>Настоящая Политика конфиденциальности (далее – Политика) устанавливает правила использования
						персональной информации, получаемой от пользователей сайта (далее – Пользователи)
						администратором сайта (http://************/) (далее - Компания).
						<br>Настоящая Политика конфиденциальности применяется ко всем Пользователям Сайта. Все термины и
						определения, встречающиеся в тексте Политики толкуются в соответствии с действующим
						законодательством РФ (в частности, ФЗ «О персональных данных».)
						<br>Пользователи прямо соглашаются на обработку своих персональных данных, как это описано в
						настоящей Политике. Использование Сайта означает выражение Пользователем безоговорочного
						согласия с Политикой и указанными условиями обработки информации.
						<br>Пользователь не должен пользоваться Сайтом, если Пользователь не согласен с условиями
						Политики.</p>

					<h2>1. Персональная информация Пользователей, которую обрабатывает Компания</h2>
					<p>1.1. Сайт собирает, получает доступ и использует в определенных Политикой целях персональные
						данные Пользователей, техническую и иную информацию, связанную с Пользователями.
						<br>1.2. Техническая информация не является персональными данными. Компания использует файлы
						cookies, которые позволяют идентифицировать Пользователя. Файлы cookies – это текстовые файлы,
						доступные Компании, для обработки информации об активности
						<br>Пользователя, включая информацию о том, какие страницы посещал Пользователь и о времени,
						которое Пользователь провел на странице. Пользователь может отключить возможность использования
						файлов cookies в настройках браузера.
						<br>1.3. Также под технической информацией понимается информация, которая автоматически
						передается Компании в процессе использования Сайта с помощью установленного на устройстве
						Пользователя программного обеспечения.</p>

					<h2>2. Цели сбора персональных данных</h2>
					<p>2.1. Главная цель Компании при сборе персональных данных — предоставление информационных,
						консультационных услуг Пользователям. Пользователи соглашаются с тем, что Компания также может
						использовать их персональные данные для: Идентификация стороны в рамках предоставляемых услуг;
						<br>Предоставления услуг и клиентской поддержки по запросу Пользователей;
						<br>Улучшение качества услуг, удобства их использования, разработка и развитие Сайта, устранения
						технических неполадок или проблем с безопасностью;
						<br>Анализ для расширения и совершенствования услуг, информационного наполнения и рекламы услуг;
						<br>Информирования Пользователей об услугах, целевом маркетинге, обновлении услуг и рекламных
						предложениях на основании информационных предпочтений Пользователей;
						<br>Таргетирование рекламных материалов; рассылки индивидуальных маркетинговых сообщений
						посредством электронной почты, звонки и SMS;
						<br>Проведение статистических и иных исследований на основе обезличенных данных;
						<br>2.2. Компания использует техническую информацию обезличено в целях, указанных в пункте 2.1.
					</p>
				</div>
			</div>
		</main>
		<!-- Yandex.Metrika counter --> <noscript>
			<div><img src="https://mc.yandex.ru/watch/76285963" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript> <!-- /Yandex.Metrika counter -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<!-- Facebook Pixel Code -->
		<noscript><img height="1" width="1" style="display:none"
				src="https://www.facebook.com/tr?id=311837792834304&ev=PageView&noscript=1" /></noscript>
		<!-- End Facebook Pixel Code -->

		<button id="up"></button>
	</div>
	<div class="bg-hide"></div>
	<div class="filter-open-bg"></div>

	<div class="modal fade" id="question" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content "><button type="button" class="close" data-dismiss="modal"
					aria-label="Close"></button>
				<p class="h2">Задайте свой вопрос</p>
				<form id="bx_3828015935_WFQ_form_container" action="https://pgsouz.ru/personalnye-dannye/" method="post"
					enctype="multipart/form-data"><input name="PROP[USER_NAME_WFQ]" value="" required="required"
						type="text" placeholder="Ваше имя"><input name="PROP[USER_EMAIL_WFQ]" value=""
						required="required" type="email" placeholder="Ваш e-mail"><input id="feedback_question"
						name="PROP[USER_TELEFON_WFQ]" value="" required="required" type="text"
						placeholder="Ваш телефон"><textarea name="PROP[PREVIEW_TEXT_WFQ]" required="required"
						placeholder="Ваш вопрос"></textarea>
					<div class="captcha_bitrix"><input type="hidden" name="captcha_sid"
							value="060d729cbb564ba64d0e38bf9718c311">
						<div id="newBadge" class="g-recaptcha" data-theme="light" data-size="invisible"
							available-text="Введите проверочный код,Введите слово на картинке,Защита от автоматических сообщений,Введите код с картинки"
							data-sitekey="6LdTC8IUAAAAAPncvrmUvRDekORoCEr_MlmXQ0CK" data-badge="bottomright">
							<div class="grecaptcha-badge" data-style="bottomright"
								style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
								<div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60"
										role="presentation" name="a-h1n6h17aisot" frameborder="0" scrolling="no"
										sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
										src="./Персональные данные_files/anchor.html"></iframe></div>
								<div class="grecaptcha-error"></div><textarea id="g-recaptcha-response"
									name="g-recaptcha-response" class="g-recaptcha-response"
									style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
							</div><iframe style="display: none;"
								src="./Персональные данные_files/saved_resource.html"></iframe>
						</div><input name="gReCaptcha" hidden="hidden"
							value="6LdTC8IUAAAAAPncvrmUvRDekORoCEr_MlmXQ0CK"><br><input name="gReCaptchaAction"
							hidden="hidden" value="homepage"><input id="captcha_word" type="text" name="captcha_word"
							style="display:none" value="6LdTC" class="input-field" size="30" maxlength="50"
							placeholder="Введите символьный код">
					</div>
					<div class="text-center"><input name="PROP[SUBMIT_WFQ]" type="submit" class="btn" value="Отправить">
					</div>
				</form>
				<div class="info">
					<p>Нажимая «Отправить», вы соглашаетесь с <a href="https://pgsouz.ru/personalnye-dannye">правилами
							обработки персональных данных</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="title-search-result"></div>

    {{-- Footer --}}
    @include('components-frontend.footer')
	@include('components-frontend.modal-search')

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var audioElement = document.querySelector('audio[src="https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3"]');
			if (audioElement) {
				audioElement.pause();
				audioElement.remove();
			}
		});
	</script>

</body>

</html>