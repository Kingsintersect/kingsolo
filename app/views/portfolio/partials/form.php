<?php
use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post" enctype="multipart/form-data">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>
        <?= FH::inputBlock('text', 'Project Name', 'name', $this->product->name, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Website url', 'web_url', $this->product->web_url, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Link To The Github Page', 'github_link', $this->product->github_link, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Project Or Product', 'type', $this->product->type, ['class'=>'form-control'], ['class'=>'form-group col-md-5']);?>

        <?=FH::inputBlock('text', 'Client', 'client', $this->product->client, ['class'=>'form-control'], ['class'=>'form-group col-md-3']);?>

        <?=FH::inputBlock('text', 'Screen Shot Of the Project', 'screenshot', $this->product->screenshot, ['class'=>'form-control'], ['class'=>'form-group col-md-4']);?>

        <?=FH::inputBlock('text', 'Project Description', 'description', $this->product->description, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <div class="col-md-12 text-right">
            <a href="<?=PROOT?>portfolio" class="btn btn-default">Cancel</a>
            <?= FH::submitTag('Save', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</form>