<!DOCTYPE html>
<html lang="ru">

<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php'); ?>

<body>
	<div class="wrapper">
		<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/header.php'); ?>
		<main class="page">
			<!--слайдер под шапкой -->
			<div class="top-slider  swiper">
				<?/*
				<!-- Двигающееся часть слайдера -->
				<div class="swiper-wrapper ">
					<!-- Слайд -->
					<div class="top__slide swiper-slide">
						<div class="top__slide-info">
							<p class="top__slide-block">GET IN THE</p>
							<h2 class="top__slide-title"> BEST SHAPE OF YOUR LIFE</h2>
							<p class="top__slide-desc">Since opening in 2014, we’ve been dedicated to training champions in and out of the ring by building </p>
							<a href="#" class="top__slide-link"> <img src="img/icons/slider-arrow.svg" alt="">Call to action</a>
						</div>
						<div class="top-slider__img">
							<picture><source srcset="img/upload/slider.webp" type="image/webp"><img src="img/upload/slider.jpg" alt=""></picture>
						</div>
						<div class="top__slide-social">
							<img src="img/icons/ins.svg" alt="">
							<img src="img/icons/face.svg" alt="">
							<img src="img/icons/telegram.svg" alt="">
						</div>
					</div>
					<div class="top__slide swiper-slide">
						<div class="top__slide-info">
							<p class="top__slide-block">GET IN THE</p>
							<h2 class="top__slide-title"> BEST SHAPE OF YOUR LIFE</h2>
							<p class="top__slide-desc">Since opening in 2014, we’ve been dedicated to training champions in and out of the ring by building </p>
							<a href="#" class="top__slide-link"> <img src="img/icons/slider-arrow.svg" alt="">Call to action</a>
						</div>
						<div class="top-slider__img">
							<picture><source srcset="img/upload/slider.webp" type="image/webp"><img src="img/upload/slider.jpg" alt=""></picture>
						</div>
						<div class="top__slide-social">
							<img src="img/icons/ins.svg" alt="">
							<img src="img/icons/face.svg" alt="">
							<img src="img/icons/telegram.svg" alt="">
						</div>
					</div>
				</div>
				<!-- Если нужна пагинация -->
				<div class="swiper-pagination"></div>
				<!-- Если нужен скролбар -->
				<div class="swiper-scrollbar"></div>
				*/?>
				
				<div class=" main_slider ">
					
					<div class="top__slide swiper-slide">
						<div class="top__slide-info">
							<p class="top__slide-block">GET IN THE</p>
							<h2 class="top__slide-title"> BEST SHAPE OF YOUR LIFE</h2>
							<p class="top__slide-desc">Since opening in 2014, we’ve been dedicated to training champions in and out of the ring by building </p>
							<a href="#" class="top__slide-link"> 
								<div class="top-slide_arrow">
									<svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M24.8348 5.88035L19.1531 0.198612C18.949 -0.0397141 18.5903 -0.0674967 18.352 0.13665C18.1136 0.340748 18.0859 0.699433 18.29 0.937759C18.309 0.959975 18.3298 0.980727 18.352 0.99972L23.0621 5.71555H0.568154C0.25439 5.71555 0 5.96994 0 6.28376C0 6.59757 0.25439 6.85191 0.568154 6.85191H23.0621L18.352 11.562C18.1136 11.7661 18.0859 12.1248 18.29 12.3631C18.4942 12.6015 18.8528 12.6292 19.0911 12.4251C19.1133 12.4061 19.1341 12.3854 19.1531 12.3631L24.8348 6.68141C25.0551 6.45988 25.0551 6.10197 24.8348 5.88035Z" fill="white"/>
									</svg>
								</div>
								<div class="top_slide_text">
									Call to action
								</div>
							</a>
							
						</div>
						<div class="top-slider__img">
							<picture><source srcset="img/upload/slider.webp" type="image/webp"><img src="img/upload/slider.jpg" alt=""></picture>
						</div>
						<div class="top__slide-social">
							<?/* <img src="img/icons/ins.svg" alt="">
							<img src="img/icons/face.svg" alt="">
							<img src="img/icons/telegram.svg" alt=""> */?>
							<svg class="svg_inst" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.4858 0.0510858C9.9894 -0.018717 6.28307 -0.0153286 4.78536 0.0510858C3.46927 0.112756 2.30837 0.430596 1.37247 1.3665C-0.0271847 2.76615 -0.0142736 4.60103 0.00391746 7.18628C0.00605506 7.49007 0.00826556 7.80422 0.00826556 8.12924C0.00826556 8.43344 0.0066363 8.72743 0.00506076 9.01172C-0.00974843 11.6839 -0.0198116 13.4997 1.37247 14.892C2.77469 16.2936 4.6298 16.2798 7.18585 16.2608C7.4921 16.2585 7.80841 16.2562 8.13521 16.2562H8.17931C11.2791 16.2562 12.3557 16.2562 13.4585 15.8292C14.9651 15.2444 16.1022 13.8978 16.2134 11.4791C16.2839 9.98207 16.2798 6.27642 16.2134 4.7787C16.0792 1.92356 14.5469 0.192047 11.4858 0.0510858ZM13.8543 13.8571C12.91 14.8014 11.6289 14.7985 8.86171 14.7921L8.86105 14.7921C8.62372 14.7916 8.37547 14.791 8.11556 14.791L7.65012 14.7912C4.59989 14.7934 3.32159 14.7943 2.37682 13.847C1.39393 12.8688 1.41018 11.3804 1.43377 9.22032C1.43759 8.87083 1.4416 8.50375 1.4416 8.1184C1.4416 7.79162 1.43867 7.47283 1.43582 7.16298L1.43582 7.16295C1.40607 3.9225 1.38531 1.66076 4.81517 1.48509L4.85406 1.48372C5.68672 1.45429 5.96567 1.44443 8.10607 1.44443L8.13657 1.46476C8.44602 1.46476 8.74976 1.46199 9.04661 1.45927C12.214 1.43032 14.596 1.40855 14.7516 4.84376C14.7902 5.70105 14.799 5.95858 14.799 8.12856C14.799 8.32317 14.7992 8.51109 14.7993 8.69264V8.69409C14.8021 11.6358 14.8033 12.9037 13.8543 13.8571ZM8.13515 3.95605C5.82895 3.95605 3.96189 5.82514 3.96189 8.12931C3.96189 10.4355 5.83098 12.3026 8.13515 12.3026C10.4414 12.3026 12.3084 10.4335 12.3084 8.12931C12.3084 5.82311 10.4393 3.95605 8.13515 3.95605ZM8.13515 10.8381C6.63812 10.8381 5.4264 9.62567 5.4264 8.12931C5.4264 6.63296 6.6388 5.42056 8.13515 5.42056C9.63151 5.42056 10.8439 6.63296 10.8439 8.12931C10.8446 9.62567 9.63219 10.8381 8.13515 10.8381ZM13.4489 3.79063C13.4489 4.32922 13.0123 4.76584 12.4737 4.76584C11.9351 4.76584 11.4985 4.32922 11.4985 3.79063C11.4985 3.25204 11.9351 2.81543 12.4737 2.81543C13.0123 2.81543 13.4489 3.25204 13.4489 3.79063Z" fill="#fff"/>
								<defs>
									<linearGradient id="paint0_linear_32_321" x1="8.13236" y1="-2.42359e-07" x2="-3.60027e-07" y2="13" gradientUnits="userSpaceOnUse">
										<stop stop-color="#B960FF"/>
										<stop offset="0.5625" stop-color="#D91435"/>
										<stop offset="1" stop-color="#F69E0B"/>
									</linearGradient>
								</defs>
							</svg>
							<svg class="svg_face" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.53945 2.49062H8V0.105625C7.74802 0.073125 6.88143 0 5.87218 0C3.76635 0 2.32381 1.24187 2.32381 3.52437V5.625H0V8.29125H2.32381V15H5.1729V8.29187H7.40272L7.75669 5.62563H5.17224V3.78875C5.1729 3.01812 5.39422 2.49062 6.53945 2.49062Z" fill="#fff"/>
							</svg>
							<svg class="svg_tel" width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.88588 9.22694L5.63775 13.1357C5.99276 13.1357 6.14651 12.9649 6.33089 12.7598L7.9953 10.9783L11.4441 13.807C12.0767 14.2018 12.5223 13.9939 12.6929 13.1553L14.9567 1.27498L14.9573 1.27428C15.158 0.227083 14.6192 -0.182415 14.0029 0.0744835L0.696378 5.78015C-0.211769 6.17495 -0.198019 6.74195 0.541999 6.99885L3.94396 8.18394L11.846 2.64627C12.2179 2.37047 12.556 2.52307 12.2779 2.79887L5.88588 9.22694Z" fill="#fff"/>
							</svg>
						</div>
					</div>
					
					<div class="top__slide swiper-slide">
						<div class="top__slide-info">
							<p class="top__slide-block">GET IN THE</p>
							<h2 class="top__slide-title"> BEST SHAPE OF YOUR LIFE</h2>
							<p class="top__slide-desc">Since opening in 2014, we’ve been dedicated to training champions in and out of the ring by building </p>
							<a href="#" class="top__slide-link"> 
								<div class="top-slide_arrow">
									<svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M24.8348 5.88035L19.1531 0.198612C18.949 -0.0397141 18.5903 -0.0674967 18.352 0.13665C18.1136 0.340748 18.0859 0.699433 18.29 0.937759C18.309 0.959975 18.3298 0.980727 18.352 0.99972L23.0621 5.71555H0.568154C0.25439 5.71555 0 5.96994 0 6.28376C0 6.59757 0.25439 6.85191 0.568154 6.85191H23.0621L18.352 11.562C18.1136 11.7661 18.0859 12.1248 18.29 12.3631C18.4942 12.6015 18.8528 12.6292 19.0911 12.4251C19.1133 12.4061 19.1341 12.3854 19.1531 12.3631L24.8348 6.68141C25.0551 6.45988 25.0551 6.10197 24.8348 5.88035Z" fill="white"/>
									</svg>
								</div>
								<div class="top_slide_text">
									Call to action
								</div>
							</a>
						</div>
						<div class="top-slider__img">
							<picture><source srcset="img/upload/slider.webp" type="image/webp"><img src="img/upload/slider.jpg" alt=""></picture>
						</div>
						<div class="top__slide-social">
							<svg class="svg_inst" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.4858 0.0510858C9.9894 -0.018717 6.28307 -0.0153286 4.78536 0.0510858C3.46927 0.112756 2.30837 0.430596 1.37247 1.3665C-0.0271847 2.76615 -0.0142736 4.60103 0.00391746 7.18628C0.00605506 7.49007 0.00826556 7.80422 0.00826556 8.12924C0.00826556 8.43344 0.0066363 8.72743 0.00506076 9.01172C-0.00974843 11.6839 -0.0198116 13.4997 1.37247 14.892C2.77469 16.2936 4.6298 16.2798 7.18585 16.2608C7.4921 16.2585 7.80841 16.2562 8.13521 16.2562H8.17931C11.2791 16.2562 12.3557 16.2562 13.4585 15.8292C14.9651 15.2444 16.1022 13.8978 16.2134 11.4791C16.2839 9.98207 16.2798 6.27642 16.2134 4.7787C16.0792 1.92356 14.5469 0.192047 11.4858 0.0510858ZM13.8543 13.8571C12.91 14.8014 11.6289 14.7985 8.86171 14.7921L8.86105 14.7921C8.62372 14.7916 8.37547 14.791 8.11556 14.791L7.65012 14.7912C4.59989 14.7934 3.32159 14.7943 2.37682 13.847C1.39393 12.8688 1.41018 11.3804 1.43377 9.22032C1.43759 8.87083 1.4416 8.50375 1.4416 8.1184C1.4416 7.79162 1.43867 7.47283 1.43582 7.16298L1.43582 7.16295C1.40607 3.9225 1.38531 1.66076 4.81517 1.48509L4.85406 1.48372C5.68672 1.45429 5.96567 1.44443 8.10607 1.44443L8.13657 1.46476C8.44602 1.46476 8.74976 1.46199 9.04661 1.45927C12.214 1.43032 14.596 1.40855 14.7516 4.84376C14.7902 5.70105 14.799 5.95858 14.799 8.12856C14.799 8.32317 14.7992 8.51109 14.7993 8.69264V8.69409C14.8021 11.6358 14.8033 12.9037 13.8543 13.8571ZM8.13515 3.95605C5.82895 3.95605 3.96189 5.82514 3.96189 8.12931C3.96189 10.4355 5.83098 12.3026 8.13515 12.3026C10.4414 12.3026 12.3084 10.4335 12.3084 8.12931C12.3084 5.82311 10.4393 3.95605 8.13515 3.95605ZM8.13515 10.8381C6.63812 10.8381 5.4264 9.62567 5.4264 8.12931C5.4264 6.63296 6.6388 5.42056 8.13515 5.42056C9.63151 5.42056 10.8439 6.63296 10.8439 8.12931C10.8446 9.62567 9.63219 10.8381 8.13515 10.8381ZM13.4489 3.79063C13.4489 4.32922 13.0123 4.76584 12.4737 4.76584C11.9351 4.76584 11.4985 4.32922 11.4985 3.79063C11.4985 3.25204 11.9351 2.81543 12.4737 2.81543C13.0123 2.81543 13.4489 3.25204 13.4489 3.79063Z" fill="#fff"/>
								<defs>
									<linearGradient id="paint0_linear_32_321" x1="8.13236" y1="-2.42359e-07" x2="-3.60027e-07" y2="13" gradientUnits="userSpaceOnUse">
										<stop stop-color="#B960FF"/>
										<stop offset="0.5625" stop-color="#D91435"/>
										<stop offset="1" stop-color="#F69E0B"/>
									</linearGradient>
								</defs>
							</svg>
							<svg class="svg_face" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.53945 2.49062H8V0.105625C7.74802 0.073125 6.88143 0 5.87218 0C3.76635 0 2.32381 1.24187 2.32381 3.52437V5.625H0V8.29125H2.32381V15H5.1729V8.29187H7.40272L7.75669 5.62563H5.17224V3.78875C5.1729 3.01812 5.39422 2.49062 6.53945 2.49062Z" fill="#fff"/>
							</svg>
							<svg class="svg_tel" width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.88588 9.22694L5.63775 13.1357C5.99276 13.1357 6.14651 12.9649 6.33089 12.7598L7.9953 10.9783L11.4441 13.807C12.0767 14.2018 12.5223 13.9939 12.6929 13.1553L14.9567 1.27498L14.9573 1.27428C15.158 0.227083 14.6192 -0.182415 14.0029 0.0744835L0.696378 5.78015C-0.211769 6.17495 -0.198019 6.74195 0.541999 6.99885L3.94396 8.18394L11.846 2.64627C12.2179 2.37047 12.556 2.52307 12.2779 2.79887L5.88588 9.22694Z" fill="#fff"/>
							</svg>
						</div>
					</div>
					
				</div>
				
				<div class="main_slider_dots">
					
				</div>	
				
			</div>
			<div class="ourclasses_background">
				<div class="ourclasses__container ourclasses">
					<div class="ourclasses_block">
						<p class="ourclasses_title">What We Offer</p>
						<p class="ourclasses_desc">Our classes</p>
						<p class="ourclasses_ctn">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
						<div class="ourclasses_tab">
							<div class="container ">
								<ul class='filters_wrapper '>
									<li class="filter btn btn-light active" data-filter="all">Все</li>
									<li class="filter btn btn-light" data-filter="fitt">Ударные</li>
									<li class="filter btn btn-light" data-filter="box">Борцовские</li>
									<li class="filter btn btn-light" data-filter="cardio">Фитнес</li>
								</ul>
								<div class="gallery-wrapper">
									<div class="card-item card showed" data-item="fitt;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/fitt.webp" type="image/webp"><img src="img/upload/fitt.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="fitt;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/ourservices1.webp" type="image/webp"><img src="img/upload/ourservices1.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="fitt;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/cardio.webp" type="image/webp"><img src="img/upload/cardio.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="box;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/box.webp" type="image/webp"><img src="img/upload/box.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="box;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/box2.webp" type="image/webp"><img src="img/upload/box2.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="box;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/box3.webp" type="image/webp"><img src="img/upload/box3.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="cardio;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/cardio.webp" type="image/webp"><img src="img/upload/cardio.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="cardio;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/ourservices1.webp" type="image/webp"><img src="img/upload/ourservices1.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
									<div class="card-item card showed" data-item="cardio;oviparous">
										<div class="picture-wrapper">
											<picture><source srcset="img/upload/fitt.webp" type="image/webp"><img src="img/upload/fitt.png" alt=""></picture>
										</div>
										<div class="content">
											<h2 class="title">Boxing Padwork</h2>
											<a href="">
												<p class="copy">Adults</p>
											</a>
											<a href="">
												<p class="copy">Children</p>
											</a>
											<a href="">
												<p class="copy">Individual</p>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="ourservices__container ourservices_block">
				<div class="ourservices_title">
					<p>our services</p>
				</div>
				<div class="ourservices_desc">
					<p class="ourservices_desc_title">Contrary to popular belief, Lorem Ipsum is not simply random text.
						It
						has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
						the
						more obscure Latin words</p>
					<div class="ourservices_photo">
						<div class="ourservices_photo_up">
							<picture><source srcset="img/upload/ourservices.webp" type="image/webp"><img src="img/upload/ourservices.png" alt=""></picture>
							<div class="ourservices_photo_up_block">
								<a class="ourservices_up_link" href="#">
									<div class="ourservices_up_arrow">
										<svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.8348 5.88035L19.1531 0.198612C18.949 -0.0397141 18.5903 -0.0674967 18.352 0.13665C18.1136 0.340748 18.0859 0.699433 18.29 0.937759C18.309 0.959975 18.3298 0.980727 18.352 0.99972L23.0621 5.71555H0.568154C0.25439 5.71555 0 5.96994 0 6.28376C0 6.59757 0.25439 6.85191 0.568154 6.85191H23.0621L18.352 11.562C18.1136 11.7661 18.0859 12.1248 18.29 12.3631C18.4942 12.6015 18.8528 12.6292 19.0911 12.4251C19.1133 12.4061 19.1341 12.3854 19.1531 12.3631L24.8348 6.68141C25.0551 6.45988 25.0551 6.10197 24.8348 5.88035Z" fill="white"/>
										</svg>
									</div>
									<?/* <img src="img/icons/slider-arrow.svg" alt=""> */?>
									<div class="ourservices_up_text">
										Personal training
									</div>
								</a>
								<p class="ourservices_up_title">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
							</div>
						</div>
						<div class="ourservices_photo_down">
							<picture><source srcset="img/upload/ourservices1.webp" type="image/webp"><img src="img/upload/ourservices1.png" alt=""></picture>
							<div class="ourservices_photo_down_block">
								<a class="ourservices_down_link" href="#">
									<div class="ourservices_up_arrow">
										<svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.8348 5.88035L19.1531 0.198612C18.949 -0.0397141 18.5903 -0.0674967 18.352 0.13665C18.1136 0.340748 18.0859 0.699433 18.29 0.937759C18.309 0.959975 18.3298 0.980727 18.352 0.99972L23.0621 5.71555H0.568154C0.25439 5.71555 0 5.96994 0 6.28376C0 6.59757 0.25439 6.85191 0.568154 6.85191H23.0621L18.352 11.562C18.1136 11.7661 18.0859 12.1248 18.29 12.3631C18.4942 12.6015 18.8528 12.6292 19.0911 12.4251C19.1133 12.4061 19.1341 12.3854 19.1531 12.3631L24.8348 6.68141C25.0551 6.45988 25.0551 6.10197 24.8348 5.88035Z" fill="white"/>
										</svg>
									</div>
									<?/* <img src="img/icons/slider-arrow.svg" alt=""> */?>
									<div class="ourservices_up_text">
										Personal training
									</div>
								</a>
								<p class="ourservices_down_title">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
							</div>
						</div>
					</div>
					
					<div class="ourservices_training">
						<picture><source srcset="img/upload/training.webp" type="image/webp"><img src="img/upload/training.png" alt=""></picture>
						<div class="ourservices_photo_training">
							<a class="training_link" href="#">
								<div class="ourservices_up_arrow">
										<svg width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.8348 5.88035L19.1531 0.198612C18.949 -0.0397141 18.5903 -0.0674967 18.352 0.13665C18.1136 0.340748 18.0859 0.699433 18.29 0.937759C18.309 0.959975 18.3298 0.980727 18.352 0.99972L23.0621 5.71555H0.568154C0.25439 5.71555 0 5.96994 0 6.28376C0 6.59757 0.25439 6.85191 0.568154 6.85191H23.0621L18.352 11.562C18.1136 11.7661 18.0859 12.1248 18.29 12.3631C18.4942 12.6015 18.8528 12.6292 19.0911 12.4251C19.1133 12.4061 19.1341 12.3854 19.1531 12.3631L24.8348 6.68141C25.0551 6.45988 25.0551 6.10197 24.8348 5.88035Z" fill="white"/>
										</svg>
									</div>
									<?/* <img src="img/icons/slider-arrow.svg" alt=""> */?>
									<div class="ourservices_up_text">
										Personal training
									</div>
							</a>
							<p class="training_title">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<div class="ourclasses_background timetable_block_space ">
				<div class="ourclasses__container ourclasses">
					<div class="ourclasses_block">
						<p class="ourclasses_title">fight gym classes</p>
						<p class="ourclasses_desc">Our Schedule</p>
					</div>
					
					<div class="ourclasses_tab timetable_block ">
						
						<div class="timetable_sort">
							Тип тренировки
							<svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.17423 13.4059L0.107211 10.3389C-0.0214378 10.2287 -0.036435 10.0351 0.0737642 9.90646C0.183937 9.77782 0.377557 9.76282 0.506206 9.87302C0.518198 9.8833 0.5294 9.89447 0.539653 9.90646L3.08528 12.449L3.08528 0.306692C3.08528 0.137321 3.2226 0 3.392 0C3.56139 0 3.69869 0.137321 3.69869 0.306692L3.69869 12.449L6.24123 9.90646C6.3514 9.77782 6.54502 9.76282 6.67367 9.87302C6.80232 9.98322 6.81732 10.1768 6.70712 10.3055C6.69684 10.3175 6.68567 10.3287 6.67367 10.3389L3.60665 13.4059C3.48707 13.5248 3.29387 13.5248 3.17423 13.4059Z" fill="black"/>
							</svg>
						</div>
						
						<div class="container ">
							<ul class="filters_wrapper  timetable_tab ">
								<li class="filter btn btn-light active" data-filter="all">Все</li>
								<li class="filter btn btn-light" data-filter="fitt">Ударные</li>
								<li class="filter btn btn-light" data-filter="box">Борцовские</li>
								<li class="filter btn btn-light" data-filter="cardio">Фитнес</li>
							</ul>
							
							<div class="our_classes_timetable_container row">
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Monday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
											<span>
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10.2427 1.75734C9.10938 0.624117 7.60266 0 6 0C4.39734 0 2.89062 0.624117 1.75734 1.75734C0.624117 2.89062 0 4.39734 0 6C0 7.60266 0.624117 9.10938 1.75734 10.2427C2.89062 11.3759 4.39734 12 6 12C7.60266 12 9.10938 11.3759 10.2427 10.2427C11.3759 9.10938 12 7.60266 12 6C12 4.39734 11.3759 2.89062 10.2427 1.75734ZM6 2.36719C6.58155 2.36719 7.05469 2.84032 7.05469 3.42188C7.05469 4.00343 6.58155 4.47656 6 4.47656C5.41845 4.47656 4.94531 4.00343 4.94531 3.42188C4.94531 2.84032 5.41845 2.36719 6 2.36719ZM7.5 9.39844H4.45312V8.69531H4.94531V5.88281H4.47656V5.17969H7.05469V8.69531H7.5V9.39844Z" fill="#EE5917"/>
												</svg>
											</span>
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>
										<div class="timetible_popup_info">
											<div class="timetible_popup_header">
												Technical Boxing
											</div>
											<div class="timetible_popup_data">
												<p>
													Contrary to popular belief, Lorem Ipsum is not simply random text. 
													It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
													Richard McClintock, a Latin professor at Hampden-Sydney
												</p>
												<p>
													College in Virginia, looked up one of the more obscure Latin words
												</p>
											</div>
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Tuesday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Wednesday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Thursday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Friday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								<div class="col-sm-2 week_day">
									<div class="week_day_header">
										Saturday
									</div>
									
									<div class="week_day_data">
										<div class="date_time">
											5:30 - 6:20 / студия №2 
										</div>
										<div class="title">
											Youth Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											6:30 - 7:15 / студия №1 
										</div>
										<div class="title">
											Technical Boxing
										</div>
										<div class="sub_title">
											Individual
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											8:00 - 9:10 / студия №1 
										</div>
										<div class="title">
											Beginner Sparring
										</div>
										<div class="sub_title">
											Adults
										</div>	
									</div>
									<div class="week_day_data">
										<div class="date_time">
											10:20 - 11:00 / студия №3 
										</div>
										<div class="title">
											Women’s Fitness Boxing
										</div>
										<div class="sub_title">
											Child
										</div>	
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
					
			
			
		</main>

		<? include($_SERVER['DOCUMENT_ROOT'].'/blocks/footer.php'); ?>
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
	<script src="/js/app.js"></script>
	<?/* <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js?_v=20220929105122'></script> */?>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?_v=20220929105122'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?_v=20220929105122'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js?_v=20220929105122"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?_v=20220929105122" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script>
	
		$(document).ready(function(msg){
			$('.main_slider').slick({
				infinite: true,
        		slidesToShow: 1,
        		slidesToScroll: 1,
        		arrows: false,
        		dots: true,
        		appendDots: '.main_slider_dots'
			})
		})
		
	
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