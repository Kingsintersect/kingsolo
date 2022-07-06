<?php $this->setSiteTitle('Bad Token') ?>
<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>
h1{color:#fff;}
</style>
<?php $this->end(); ?>
<?php $this->start('body') ?>
<h1 class="text-center red">Your Token Is Corrupted!</h1>
<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h1 class="text-center">Your Token Is Corrupted!</h1>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->
<?php $this->end() ?>