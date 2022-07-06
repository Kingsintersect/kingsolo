<?
use Core\H;
?>
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
                  <h2>Company</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="company">Company-View</a>
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
                <div class="col-md-12">
                    <h2 class="text-center">My Company</h2>
                    
                    <?php if(!empty($this->company)): ?>
                    <ul class="list-group">
                        <li class="list-item"><?=$this->company->name;?></li>
                        <li class="list-item"><?=$this->company->logo;?></li>
                        <li class="list-item"><?=$this->company->sliders;?></li>
                        <li class="list-item"><?=$this->company->branches;?></li>
                        <li class="list-item"><?=$this->company->address;?></li>
                        <li class="list-item"><?=$this->company->website;?></li>
                        <li class="list-item"><?=$this->company->date;?></li>
                    </ul>
                    <a href="<?=PROOT?>company/edit/<?=$this->company->id;?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencile"></i> Edit
                    </a>
                    <?php else: ?>
                        <h1>No Information about your company yet</h1>
                        <p class="align-items-center"><a href="<?=PROOT?>company/add" class="btn btn-info">Edit Company</a></p>
                    <?php endif; ?>
                </div>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->
  <?php $this->end(); ?>