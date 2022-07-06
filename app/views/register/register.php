<?php
    use Core\FH;
?>

<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>

</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
                <div class="col-md-6 col-md-offset-3 well">
                    <h3 class="text-center">Register Here!</h3><hr>
                    <form action="" method="post" class="form">
                        <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?>

                        <?= FH::inputBlock('text', 'First Name', 'fname', $this->newUser->fname, ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('text', 'Last Name', 'lname', $this->newUser->lname, ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('email', 'Email', 'email', $this->newUser->email, ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('text', 'Username', 'username', $this->newUser->username, ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('password', 'Password', 'password', $this->newUser->password, ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::inputBlock('password', 'Confirm Password', 'confirm', $this->newUser->getConfirm( ), ['class'=>'form-control input-sm'], ['class'=>'form-group']);?>

                        <?= FH::submitBlock('Register', ['class'=>'btn btn-primary btn-large'], ['class'=>'text-right']);?>
                    </form>
                </div>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->
      
<?php $this->end(); ?>