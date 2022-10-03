<!DOCTYPE html>
<html lang="ru">

<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php') ?>

<body>
	<div class="wrapper">
		<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/header.php'); ?>
		<!--    price_pass-->
		<main class="page">
			<div class="breadcrumbs_header_price">
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
			<div class="ourclasses_background">
				<div class="ourclasses__container ourclasses">
					<div class="price_block">
						<p class="ourclasses_ctn">
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
						</p>
						<div class="ourclasses_tab">
							<div class="container ">
								<ul class='filters_wrapper '>
									<li class="filter btn btn-light active" data-filter="all">Все</li>
									<li class="filter btn btn-light" data-filter="fitt">Ударные</li>
									<li class="filter btn btn-light" data-filter="box">Борцовские</li>
									<li class="filter btn btn-light" data-filter="cardio">Фитнес</li>
								</ul>
								<div class="">
									<div class="card-item  showed" data-item="fitt;oviparous">

									</div>
								</div>
							</div>
							<div class="breadcrumbs_pricing">
								<p>Boxing Padwork</p><img src="img/icons/line.svg" alt="">
								<p>Individual</p>
							</div>
							<div class="pricing-area">
								<div class="pricing-table">
									<div class="pricing-title">unlimited open gym</div>
									<div class="price_block">
										<div class="price">$99.00</div>
										<div class="pricing-type">per month</div>
									</div>

									<div class="pricing-details">
										<ul><img class="vector_price" src="img/icons/vector.svg" alt="">
											<li>Unlimited Open Gym</li>
											<li>4 Free Classes (first month only)</li>
											<li>No commitment</li>
											<li>Unlimited Open Gym</li>
											<li>4 Free Classes (first month only)</li>
											<li>No commitment</li>
										</ul>
									</div>
									<div class="btn-plan">Order</div>

								</div>
								<div class="pricing-table">
									<div class="pricing-title">Monthly unlimited</div>
									<div class="price_block">
										<div class="price">$120.00</div>
										<div class="pricing-type">per month</div>
									</div>

									<div class="pricing-details">
										<ul> <img class="vector_price" src="img/icons/vector.svg" alt="">
											<li>Unlimited Open Gym</li>
											<li>4 Free Classes (first month only)</li>
											<li>No commitment</li>
											<li>Unlimited Open Gym</li>
										</ul>
									</div>
									<div class="btn-plan">Order</div>

								</div>
								<div class="pricing-table">
									<div class="pricing-title">Yearly unlimited</div>
									<div class="price_block">
										<div class="price">$206.00</div>
										<div class="pricing-type">per month</div>
									</div>
									<div class="pricing-details">
										<ul><img class="vector_price" src="img/icons/vector.svg" alt="">
											<li>Unlimited Open Gym</li>
											<li>4 Free Classes (first month only)</li>
											<li>No commitment</li>
											<li>Unlimited Open Gym</li>
											<li>4 Free Classes (first month only)</li>
										</ul>
									</div>
									<div class="btn-plan">Order</div>

								</div>
							</div>

						</div>
					</div>
				</div>
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
	<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js?_v=20220929105122'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?_v=20220929105122'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?_v=20220929105122'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js?_v=20220929105122"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?_v=20220929105122" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script>
		function filter_items(filter_class, item_class) {
			let filter_link = $(`.${filter_class}`);
			let filter_item = $(`.${item_class}`);

			filter_link.click(function() {
				filter_link_clicked = $(this).data('filter');

				$(this).addClass('active');
				$(this).siblings($(`.${filter_class}`)).removeClass('active');

				filter_item.each(function() {
					item_data = $(this).data('item');

					if (filter_link_clicked === ('all') || item_data.includes(filter_link_clicked)) {
						$(this).show();
					} else {
						$(this).hide();
					}

				})
			});
		}

		//Enter the name of your filter classes and your item wrapper.
		filter_items('filter', 'card-item');
	</script>
</body>

</html>