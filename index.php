<!DOCTYPE html>
<html lang="ru">

<head>
	<title>888STARZ</title>
	<meta name="description" content="The World's 1st DeFi Bookmaker!">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="img/favicon.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,400;8..144,500;8..144,600;8..144,800&display=swap" rel="stylesheet">
	<link href="/css/normalize.css" rel="stylesheet" media="all" onload="this.media='all'">
	<link href="/css/bootstrap.min.css" rel="stylesheet" media="all" onload="this.media='all'">
	<link rel="stylesheet" href="css/style.min.css?1" />
</head>

<body class="d-flex flex-column justify-content-between position-relative overflow-x-hidden">
	<? include_once('img/sprite.svg'); ?>

	<header class="header mx-auto">
		<div class="container-fluid">
			<div class="header-wrapper">
				<div class="row flex-column flex-lg-row align-items-center justify-content-center gap-3 gap-lg-4">
					<div class="col-auto">
						<a href="#">
							<img class="header-logo img-fluid" src="/img/logo.svg" alt="888">
						</a>
					</div>
					<div class="col-auto">
						<div class="header-menu">
							<nav class="nav align-items-center justify-content-center fw-bold">
								<div class="dropdown">
									<a id="navDropdown" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-offset="0,10" aria-expanded="false">Платформа</a>
									<div class="dropdown-menu">
										<a class="dropdown-item d-inline-flex align-items-center fw-bold" href="#">
											<svg class="icon">
												<use xlink:href="#teacher" />
											</svg>
											Для онлайн школ
										</a>
										<a class="dropdown-item d-inline-flex align-items-center fw-bold" href="#">
											<svg class="icon">
												<use xlink:href="#bookmark" />
											</svg>
											Возможности
										</a>
										<a class="dropdown-item d-inline-flex align-items-center fw-bold" href="#">
											<svg class="icon">
												<use xlink:href="#message" />
											</svg>
											Отзывы пользователей
										</a>
										<a class="dropdown-item d-inline-flex align-items-center fw-bold" href="#">
											<svg class="icon">
												<use xlink:href="#tasks" />
											</svg>
											Для обучения персонала
										</a>
									</div>
								</div>
								<a class="nav-link" href="#">Тарифы</a>
								<a class="nav-link" href="#">Помощь</a>
								<a class="social-link" href="#">
									<svg class="icon social-icon instagram">
										<use xlink:href="#instagram" />
									</svg>
								</a>
								<a class="social-link" href="#">
									<svg class="icon social-icon telegram">
										<use xlink:href="#telegram" />
									</svg>
								</a>
							</nav>
						</div>
					</div>
					<div class="col-auto">
						<div class="header-btns">
							<div class="row gap-3 gap-xl-4 justify-content-center">
								<div class="col-auto">
									<button class="header__btn btn btn-get btn-get_secondary fw-bold">Войти</button>
								</div>
								<div class="col-auto">
									<button class="header__btn btn btn-get btn-get_primary align-items-center fw-bold">
										<svg class="icon card1">
											<use xlink:href="#add" />
										</svg>
										Создать платформу
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="flex-grow-1 d-flex flex-column">
		<div class="container">
			<section class="block1">
				<div class="row flex-column flex-xxl-row align-items-center align-items-xxl-end justify-content-center row-gap-5">
					<div class="col-auto">
						<div class="block1-text">
							<h4 class="text-gradient-blue fw-bold">КОГДА КАЧЕСТВО ОБУЧЕНИЯ В ПРИОРИТЕТЕ</h4>

							<h1 class="wordCarousel fw-bold">
								<span>Удобная платформа<br>для </span>
								<div>
									<ul class="flip2">
										<li>онлайн-обучения</li>
										<li>новых возможностей</li>
									</ul>
								</div>
							</h1>

							<h4>Первая белорусская платформа Overschool<br> для онлайн-обучения с пожизненным бесплатным<br> тарифом. Попробуй прямо сейчас!</h4>
						</div>

						<div class="block1-btn">
							<button class="btn btn-get btn-get_primary fw-semibold">Попробовать бесплатно</button>
						</div>
					</div>

					<div class="col-auto">
						<div class="position-relative">
							<div class="block1-person position-relative">
								<div class="block1-person__circle position-absolute top-50 start-50 translate-middle">
									<img src="/img/person-circle.png" class="rotate" alt="person">
								</div>
								<div class="block1-person__back position-absolute top-50 start-50 translate-middle">
									<img src="/img/person-back.png" alt="person">
								</div>
								<div class="block1-person__front position-relative translate-middle-x z-1">
									<img src="/img/person.png" alt="person">
								</div>
								<div class="block1-person__hands position-absolute top-50 start-50 translate-middle z-2">
									<img src="/img/person-hands.png" alt="person">
								</div>
							</div>

							<div class="block1-card block1-card1 position-absolute move1">
								<div class="block1-card-wrapper scaleXL">
									<div class="row align-items-center">
										<div class="col-auto">
											<div class="icon-wrapper">
												<svg class="icon">
													<use xlink:href="#layer" />
												</svg>
											</div>
										</div>
										<div class="col-auto text-gradient-blue fw-bold">МОБИЛЬНЫЙ<br> КАБИНЕТ УЧЕНИКА</div>
									</div>
								</div>
							</div>
							<div class="block1-card block1-card2 position-absolute move2">
								<div class="block1-card-wrapper scaleXR">
									<div class="row align-items-center">
										<div class="col-auto">
											<div class="icon-wrapper">
												<svg class="icon">
													<use xlink:href="#profile" />
												</svg>
											</div>
										</div>
										<div class="col-auto text-gradient-blue fw-bold">АНАЛИТИКА<br> ОБУЧЕНИЯ</div>
									</div>
								</div>
							</div>
							<div class="block1-card block1-card3 position-absolute move3 translate-middle z-1">
								<div class="block1-card-wrapper scale">
									<div class="row align-items-center">
										<div class="col-auto">
											<div class="icon-wrapper">
												<svg class="icon">
													<use xlink:href="#message" />
												</svg>
											</div>
										</div>
										<div class="col-auto text-gradient-blue fw-bold">ВСТРОЕННЫЙ<br> ЧАТ С УЧЕНИКАМИ</div>
									</div>
								</div>
							</div>
							<div class="block1-card block1-card4 position-absolute move4 z-1">
								<div class="block1-card-wrapper scaleXL">
									<div class="row align-items-center">
										<div class="col-auto">
											<div class="icon-wrapper">
												<svg class="icon">
													<use xlink:href="#profile" />
												</svg>
											</div>
										</div>
										<div class="col-auto text-gradient-blue fw-bold">АНАЛИТИКА<br> ОБУЧЕНИЯ</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="block2">
				<div class="row justify-content-center">
					<div class="col-auto">
						<div class="block2-card block2-card1">
							<div class="row flex-column text-center">
								<div class="col">
									<div class="position-relative">
										<img class="img-back img-fluid" src="/img/1.png" alt="888">
										<img class="img-front img-fluid" src="/img/1hover.png" alt="888">
									</div>
								</div>

								<div class="col-auto">
									<h3 class="fw-bold">Безлимит учеников</h3>
									<p class="fw-semibold">База обучающихся без ограничений</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-auto">
						<div class="block2-card block2-card2">
							<div class="row flex-column text-center">
								<div class="col">
									<div class="position-relative">
										<img class="img-back img-fluid" src="/img/2.png" alt="888">
										<img class="img-front img-fluid" src="/img/2hover.png" alt="888">
									</div>
								</div>

								<div class="col-auto">
									<h3 class="fw-bold">Бесплатное приложение</h3>
									<p class="fw-semibold">Обучение с любых устройств</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-auto">
						<div class="block2-card block2-card3">
							<div class="row flex-column text-center">
								<div class="col">
									<div class="position-relative">
										<img class="img-back img-fluid" src="/img/3.png" alt="888">
										<img class="img-front img-fluid" src="/img/3hover.png" alt="888">
									</div>
								</div>

								<div class="col-auto">
									<h3 class="fw-bold">Безлимит гигабайт</h3>
									<p class="fw-semibold">Загружайте файлы без ограничений</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="block3">
				<div class="row flex-column-reverse flex-xl-row align-items-center align-items-xl-stretch">
					<div class="col">
						<div class="block3-img position-relative h-100">
							<img class="rocket-bg img-fluid position-absolute w-100 h-100" src="/img/rocket-bg.png" alt="888">
							<img class="rocket img-fluid position-relative h-100" src="/img/rocket.png" alt="888">

							<svg class="icon star star1">
								<use xlink:href="#star" />
							</svg>
							<svg class="icon star star2">
								<use xlink:href="#star" />
							</svg>
							<svg class="icon star star3">
								<use xlink:href="#star" />
							</svg>
						</div>
					</div>

					<div class="col-auto">
						<div class="block3-text">
							<h2 class="fw-bolder">Бесплатный тариф «Intern»</h2>
							<h3 class="fw-semibold">Создайте свой курс и сразу запустите продажи.<br> Без сложных настроек, интеграций и вложений</h3>
							<ul class="fw-bold">
								<li>1 курс</li>
								<li>Бесплатно навсегда</li>
								<li>Полный функционал платформы</li>
								<li>Возможность протестировать все функции платформы</li>
							</ul>
							<button class="btn btn-get btn-get_white fw-semibold"><span class="text-gradient-blue">Попробовать бесплатно</span></button>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>

	<script src="/js/jquery-3.5.1.min.js"></script>
	<script defer="defer" src="/js/bootstrap.bundle.min.js"></script>
	<script defer="defer" src="/js/script.js?1"></script>
</body>

</html>