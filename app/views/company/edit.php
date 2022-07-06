<?php $this->setSiteTitle('Editing '.$this->company->displayName()); ?>
<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">

<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="<?=PROOT?>index">Home</a>
                        <a href="<?=PROOT?>about">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
                <div class="col-md-8">
                    <h2 class="text-center red">Edit Company</h2>
                    <hr>
                    <?php $this->partial('company', 'form'); ?>
                </div>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->



<?php $this->end(); ?>