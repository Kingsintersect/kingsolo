<?php $this->setSiteTitle($this->contact->displayName()); ?>
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
                  <h2>Contact</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="contact">Contact-View</a>
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
                <div class="col-md-8 col-md-offset-2 well">
                    <a href="<?=PROOT?>contact" class="btn btn-xs btn-default">Back</a>
                    <h2 class="text-center grey">About to reply</h2>
                    
                </div>
            </div>
        </div>
    <section>

<?php $this->end(); ?> 