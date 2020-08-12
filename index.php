<!DOCTYPE html>
<html>
<head>
	<title>BOOTSTRAP</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="media.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="nav">
				<div class="col-xl-10">
					<h2 class="nav-title">
						OCBBUD
					</h2>
				</div>
				<div class="col-xl-2">
					<p class="nav-phone" type='tel'>
						+48 123 456 789
					</p>
				</div>
			</nav>
			<div class="row">
				<div class="col-xl-12 main-info">
					<h1 class="main-title">
						Ищете специалистов?
					</h1>
					<p class="main-text">
						Заполните форму и отправьте сообщение, и мы обязательно свяжемся с Вами.
					</p>
					<form id="contact-form" name="contact-form" action="mail.php" method="POST">
						<div class="form-row ">
							<div class="col-xl-7 form-group">
								<input class="form-control form-control-lg " type="text" id="name" name="name" placeholder="Ваше имя" required>
							</div>
							<div class="col-xl-7 form-group">
								<input class="form-control form-control-lg " type="tel" id="tel" name="tel" placeholder="Ваш телефон" required>
							</div>
							<div class="col-xl-7 form-group">
								<input class="form-control form-control-lg " type="text" id="email" name="email" placeholder="Ваш E-mail" required>
							</div>
							<div class="col-xl-10">
								<button class="first__btn" onclick="mail()" name="submit" type="submit"> <i class='fab fa-telegram-plane'></i>  Отправить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<section class="section_2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center second_title">
						Вот почему вы должны работать с нами
					</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 ">
					<div class="card border-white">
						<div class="card-body">
							<h2 class="card-title">
								Хорошые сотрудники
							</h2>
							<p class="card-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6 ">
					<div class="card border-white">
						<div class="card-body">
							<h2 class="card-title">
								Экономия денег
							</h2>
							<p class="card-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6 ">
					<div class="card border-white">
						<div class="card-body">
							<h2 class="card-title">
								Быстрый набор
							</h2>
							<p class="card-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-6 ">
					<div class="card border-white">
						<div class="card-body">
							<h2 class="card-title">
								Приятные цены
							</h2>
							<p class="card-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center third-title">
						Кто мы такие?
					</h1>
				</div>
				<div class="col-12">
					<p class="text-center third-text">
						OCBBUD sp.z o.o. со штаб-квартирой во Вроцлаве, работает в сфере поиска сотрудников в странах Беларуси, Украины и поиска сотрудников - граждан из тех стран, которые в настоящее время находятся в Польше.
					</p>
				</div>
				<div class=" d-none d-sm-block col-12 ">
					<h1 class="text-center third-title2">
						Мы работаем с
					</h1>
				</div>
				<div class="d-none d-sm-block col-12 img_colab">
					<img src="logo1.png">
					<img src="logo2.png">
					<img src="logo3.png">
					<img src="logo4.png">
				</div>
			</div>
		</div>
	</section>
	<section class="section_4">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12">
					<h1 class="fth_title text-lg-center text-xl-left">
						Бесплатная консультация
					</h1>
					<p class="fth_text text-lg-center text-xl-left">
						Если Вам требуется консультация или Вы хотите узнать больше информации о наших услугах, свяжитесь с нами удобным для вас способом. Заполните контактную форму рядом или позвоните по телефону (вайберу) и мы ответим на все интересующие Вас вопросы.
					</p>
				</div>
				<div class="col-xl-6 col-lg-12 ">
					<form id="contact-form" name="contact-form" action="mail.php" method="POST">
						<div class="form-row ">
							<div class="col-xl-12 form-group">
								<input class="form-control form-control-lg " type="text" id="name" name="name" placeholder="Ваше имя" required>
							</div>
							<div class="col-xl-12 form-group">
								<input class="form-control form-control-lg " type="tel" id="tel" name="tel" placeholder="Ваш телефон" required>
							</div>
							<div class="col-xl-12 form-group ">
								<input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="Ваш E-mail" required>
							</div>
							<div class="col-xl-10 d-flex justify-content-sm-center">
								<button class="first__btn" onclick="mail()" name="submit" type="submit"> <i class='fab fa-telegram-plane'></i>  Отправить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="section_5">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12">
					<div class="col-12 d-none d-xl-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.8615164092253!2d16.98275431575542!3d51.11101517957195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc1fbad247067%3A0x22470f82ea80d1d3!2sFabryczna%2014%2C%2050-001%20Wroc%C5%82aw%2C%20Polska!5e0!3m2!1spl!2sua!4v1581168852493!5m2!1spl!2sua" width="510" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12">
						<h1 class="five_title text-md-center text-xl-left">
							Наши контакты
						</h1>
						<p class="five_text text-md-center text-xl-left">
							Если Вам нужна детальная информация или персональная консультация, свяжитесь с нами любым удобным для Вас способом
						</p>
						<p class="five_text text-md-center text-xl-left">
							Polska
						</p>
						<p class="five_text text-md-center text-xl-left">
							Adres: ul. Fabryczna 14, 53-609 Wrocław
						</p>
						<p class="five_text text-md-center text-xl-left">
							Numere telefonu:
						</p>
						<p class="five_text text-md-center text-xl-left">
							(PL) +48 123 456 789 Tomash
						</p>
						<p class="five_text text-md-center text-xl-left">
							(PL UA RU) +48 123 456 789 Anton
						</p>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="col-12">
			<p class="text-center span">
				© 2019 Все права защищены   All Rights Reserved
			</p>
		</div>
	</footer>


	




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="js.js"></script>

</body>
</html>