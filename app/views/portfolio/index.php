<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>
	.pcontainer {
	position: relative;
	width: 100%;
	}

	.pimage {
	display: block;
	width: 100%;
	height: auto;
	}

	.poverlay {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: #008CBA;
	overflow: hidden;
	width: 0;
	height: 100%;
	transition: .5s ease;
	}

	.pcontainer:hover .poverlay {
	width: 100%;
	}

	.ptext {
	color: white;
	font-size: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	white-space: nowrap;
	}
</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="<?=PROOT?>">Home</a>
                      <a href="<?=PROOT?>portfolio">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start Portfolio Area =================-->
	<section class="portfolio_area section-margin pb-0" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">My Portfolio <span></span></p>
						<h2>Check My Recent <br> Client Work </h2>
					</div>
				</div>
			</div>

			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<!-- <li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li> -->
				</ul>
			</div>
			<div class="row">
				<?php foreach($this->portfolio as $port): ?>
				<div class="col-lg-4 col-md-4">
					<div class="pcontainer">
						<img src="<?=PROOT?>img/portfolio/p1.jpg" alt="Avatar" class="pimage">
						<div class="poverlay">
							<div class="ptext">
								<h4><a href="#"><?=$port->name?></a></h4>
								<p><?=$port->description;?></p>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Area =================-->


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