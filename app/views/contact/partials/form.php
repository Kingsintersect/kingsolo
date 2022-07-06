<?php
    use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>
        
        <?=FH::textareaBlock('body Of The Message', 'body', "", ['class'=>'form-control w-100', 'cols'=>'30', 'rows'=>'7'], ['class'=>'form-group col-md-12']);?>

        <?= FH::inputBlock('text', 'First Name', 'fname', "", ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Last Name', 'lname', "", ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('email', 'Email', 'email', "", ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Subject', 'subject', "", ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?= FH::submitBlock("SEND MESSAGE", ['class'=>'primary_btn button-contactForm'], ['class'=>'mt-lg-3']); ?>
    </div>
</form>