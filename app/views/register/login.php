<?php
    use Core\FH;//echo password_hash('solomon', PASSWORD_DEFAULT);
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
                    <h2>Admin Login</h2>
                    <div class="page_link">
                        <a href="<?=PROOT?>">Home</a>
                        <a href="<?=PROOT?>register/login">Login</a>
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
                <div class="col-md-6 col-md-offset-3 well">
                    <h3 class="text-center">Log In</h3>
                    <form role="form" class="form" action="<?=PROOT?>register/login" method="post">
                        <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?>
                        
                        <?= FH::inputBlock('text', 'Username', 'username',$this->login->username, ['class'=>'form-control'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('password', 'Password', 'password','', ['class'=>'form-control'], ['class'=>'form-group']);?>
                        
                        <?= FH::CUcheckboxBlock("Remember Me", "remember_me", $this->login->getRememberMeChecked(), ['class'=>'custom-control-input'], ['class'=>'custom-control custom-checkbox'],['class'=>'custom-control-label']); ?>

                        <?= FH::submitBlock('Login', ['class'=>'btn btn-primary btn-large'], ['class'=>'form-group']);?>
                        <div class="text-right">
                            <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->
      
<?php $this->end(); ?>