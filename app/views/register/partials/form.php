<?php
use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post" enctype="multipart/form-data">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>

        <?= FH::inputBlock('text', 'First Name', 'fname', $this->profile->fname, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Last Name', 'lname', $this->profile->lname, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('email', 'Email', 'email', $this->profile->email, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Username', 'username', $this->profile->username, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Phone', 'phone', $this->profile->phone, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'State', 'state', $this->profile->state, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Address', 'address', $this->profile->address, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        <?= FH::inputBlock('text', 'Skills', 'skills', $this->profile->skills, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-6']);?>

        
        <?= FH::inputBlock('file', 'Picture', 'pix', $this->profile->pix, ['class'=>'form-control input-sm'], ['class'=>'form-group col-md-12']);?>

        <?= FH::textareaBlock('Social Network Links (Can be comma separated)', 'social_network', $this->profile->social_network, ['class'=>'form-control input-sm', 'rows'=>'3', 'cols'=>'10'], ['class'=>'form-group col-md-12']);?>

        <?= FH::textareaBlock('Tools (Can be comma separated)', 'tools', $this->profile->tools, ['class'=>'form-control input-sm', 'rows'=>'3', 'cols'=>'10'], ['class'=>'form-group col-md-12']);?>

        <?= FH::textareaBlock('Description', 'description', $this->profile->description, ['class'=>'form-control input-sm', 'rows'=>'7', 'cols'=>'10'], ['class'=>'form-group col-md-12']);?>


        <div class="col-md-12 text-right">
            <a href="<?=PROOT?>register" class="btn btn-default">Cancel</a>
            <?= FH::submitTag('Save', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</form>