<!DOCTYPE html>
<html lang="ru">

<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php') ?>

<body>
	<div class="wrapper">
		<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/header.php'); ?>
		<!--contact-->
		<main class="page">
			<div class="breadcrumbs_header_contact">
				<div class="breadcrumbs_cnt">
					<p class="breadcrumbs_title">What we offer</p>
					<p class="breadcrumbs_desc">Our services</p>
					<div class="container_breadcrumbs">
						<div class="breadcrumbs_block">
							<a href="">Home </a>
							<span>|</span><a href="">Contact</a>
						</div>
					</div>
				</div>
			</div>
			<div class="contact_det__container">
				<div class="contact_form">
					<div class="input_wrapper">
						<label for="fname">Name</label>
						<input type="text" id="fname" name="firstname">
					</div>
					<div class="input_wrapper">
						<label for="email">Email</label> <label class="surely" for="email">*</label>
						<input class="email" type="email" id="email" name="email">
					</div>
					<div class="input_wrapper">
						<label>Message</label>
						<textarea></textarea>
					</div>
					<button data-modal-open="" type="button" class="contact_form_btn">Send message</button>
				</div>
				<div class="contact_data">
					<div class="top-contacts">
						<div class="contact_title">
							<p>Address</p>
						</div>
						<div class="contacts-address">
							<p>1034 Bloor St W, Toronto, M6H 1M3</p>
						</div>
						<div class="contacts-title">
							<a href="mailto:info@unitedboxing.club" class="contacts">info@unitedboxing.club</a>
						</div>
						<div class="contacts-phone">
							<a href="tel:4162680696">416-268-0696</a>
						</div>
						<div class="contact_title">
							<p>Front Desk Hours</p>
						</div>
						<div class="contact_timetable">
							<ul>
								<li>7:00am - 8:00am</li>
								<li>5:00pm - 9:00pm</li>
							</ul>
						</div>
						<div class="top__social ">
							<div class="social-icons">
								<img src="img/icons/ins_black.svg" alt="">
								<img src="img/icons/facebook_black.svg" alt="">
								<img src="img/icons/telegram_black.svg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contact_maps__container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92364.54957664128!2d-79.50192094559324!3d43.66081295995612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b345c33b245c7%3A0xc66fea807da7251e!2zMTAzNCBCbG9vciBTdCBXLCBUb3JvbnRvLCBPTiBNNkggM0MxLCDQmtCw0L3QsNC00LA!5e0!3m2!1sru!2s!4v1664262339361!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

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