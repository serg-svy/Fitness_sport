<!DOCTYPE html>
<html lang="ru">

<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php') ?>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header_container">
				<a href="/" class="header__logo"><img src="img/icons/logo.svg" alt=""></a>
				<div class="header__menu-top menu-top">
					<nav class="menu-top__body">
						<ul class="menu-top__list">
							<li class="menu-top__item"><a href="" class="menu-top__link">About</a></li>
							<li class="menu-top__item"><a href="/price.html" class="menu-top__link">Price</a></li>
							<li class="menu-top__item"><a href="" class="menu-top__link">Schedule</a></li>
							<li class="menu-top__item"><a href="/classes.html" class="menu-top__link">Classes</a></li>
							<li class="menu-top__item"><a href="/services.html" class="menu-top__link">Services</a></li>
							<li class="menu-top__item"><a href="/contact.html" class="menu-top__link">Contacts</a></li>
						</ul>
					</nav>
				</div>
				<div class="header__actions">
					<select name="form[]" data-class-modif="form">
						<option value="1" selected data-href="#">English language</option>
						<option value="2" data-href="#">English language</option>
					</select>
					<div class="header__actions-cart">
						<a href="">Price Merch</a>
						<button type="button" class="header__actions-user user">Order a call</button>
					</div>
				</div>
			</div>
		</header>
		<main class="page">
		</main>
		<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/footer.php') ?>
	</div>
	<!-- <div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
				Text
			</div>
		</div>
	</div>
</div> -->
	<script src="js/app.min.js?_v=20220929105122"></script>
</body>

</html>