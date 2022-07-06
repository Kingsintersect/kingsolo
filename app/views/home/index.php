<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>
    .olomon{
		background: linear-gradient(90deg, #1345e6 0%, #ed239f 100%);
		background-clip: border-box;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
    }
</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="banner_content">
							<h3>Hey There !</h3>
							<h1 class="text-uppercase olomon">I am <?=$this->about->username;?></h1>
							<h5 class="text-uppercase"><?=$this->about->skills;?></h5>
							<div class="social_icons my-5">
								<a href="#"><i class="ti-twitter"></i></a>
								<a href="#"><i class="ti-facebook"></i></a>
								<a href="#"><i class="ti-instagram"></i></a>
								<a href="#"><i class="ti-dribbble"></i></a>
								<a href="#"><i class="ti-vimeo"></i></a>
							</div>
							<a class="primary_btn" href="#"><span>See My Work</span></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="home_right_img">
							<img class="img-fluid" src="<?=PROOT?>img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Statistics Area =================-->
	<!-- <section class="statistics_area">
		<div class="container">
			<div class="row justify-content-lg-start justify-content-center">
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">15</span>k+</h3>
						<p>Happy Customer</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">12</span>k+</h3>
						<p>Ticket Solved</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="statistics_item">
						<h3><span class="counter">9</span>/10</h3>
						<p>Average Rating</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================ End Statistics Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="<?=PROOT?>img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<p class="top_text">About me <span></span></p>
						<h2><?=$this->about->skills;?></h2>
						<p><?=$this->about->description;?></p>
						<a class="primary_btn" href="#"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Start Brands Area =================-->
	<section class="brands-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="owl-carousel brand-carousel">
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo1.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo2.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo3.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo4.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo5.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="<?=PROOT?>img/brands/logo3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brands Area =================-->

<?php $this->end(); ?>