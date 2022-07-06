<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>

</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

	<!--================ Start Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Our News</h2>
					<div class="page_link">
						<a href="<?=PROOT?>home">Home</a>
						<a href="<?=PROOT?>news">News</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Banner Area =================-->

	<!--================News Area =================-->
	<section class="blog_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="blog_left_sidebar">
						<?php foreach ($this->news as $new): ?>
						<article class="blog_item">
							<div class="blog_item_img">
							<img class="card-img rounded-0" src="<?=PROOT.$new->photo;?>" alt="">
							<a href="#" class="blog_item_date">
								<h3>15</h3>
								<p>Jan</p>
							</a>
							</div>
							
							<div class="blog_details">
								<a class="d-inline-block" href="<?=PROOT?>news/details/<?=$new->id;?>">
									<h2><?=$new->title;?></h2>
								</a>
								<p><?=substr($new->body, 0, 250).' ...';?></p>
								<ul class="blog-info-link">
								<li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
								<li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
								</ul>
							</div>
						</article>
						<?php endforeach; ?>
						
						<nav class="blog-pagination justify-content-center d-flex">
							<ul class="pagination">
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Previous">
										<span aria-hidden="true">
											<span class="ti-arrow-left"></span>
										</span>
									</a>
								</li>
								<li class="page-item">
									<a href="#" class="page-link">1</a>
								</li>
								<li class="page-item active">
									<a href="#" class="page-link">2</a>
								</li>
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Next">
										<span aria-hidden="true">
											<span class="ti-arrow-right"></span>
										</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget search_widget">
							<form action="#">
								<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Search Keyword">
									<div class="input-group-append">
									<button class="btn" type="button"><i class="ti-search"></i></button>
									</div>
								</div>
								</div>
								<button class="primary_btn rounded-0 primary-bg text-white w-100" type="submit">Search</button>
							</form>
						</aside>

						<aside class="single_sidebar_widget popular_post_widget">
							<h3 class="widget_title">Recent Post</h3>
							<?php foreach ($this->news as $new): ?>
							<div class="media post_item">
								<img width="100px" src="<?=PROOT.$new->photo;?>" alt="post">
								<div class="media-body">
									<a href="<?=PROOT?>news/details/<?=$new->id;?>">
										<h3><?=$new->title;?>...</h3>
									</a>
									<p>January 12, 2019</p>
								</div>
							</div>
							<?php endforeach; ?>
						</aside>

						<aside class="single_sidebar_widget instagram_feeds">
							<h4 class="widget_title">Instagram Feeds</h4>
							<ul class="instagram_row flex-wrap">
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i1.png" alt="">
									</a>
								</li>
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i2.png" alt="">
									</a>
								</li>
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i3.png" alt="">
									</a>
								</li>
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i4.png" alt="">
									</a>
								</li>
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i5.png" alt="">
									</a>
								</li>
								<li>
									<a href="#">
									<img class="img-fluid" src="<?=PROOT?>img/instagram/widget-i6.png" alt="">
									</a>
								</li>
							</ul>
						</aside>


						<aside class="single_sidebar_widget newsletter_widget">
							<h4 class="widget_title">Newsletter</h4>

							<form action="#">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter email" required>
							</div>
							<button class="primary_btn rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
							</form>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->        
  
  <?php $this->end(); ?>