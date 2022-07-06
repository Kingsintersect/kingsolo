<?php
use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>
        <?= FH::inputBlock('text', 'Services Title', 'title', $this->service->title, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Service Description', 'description', $this->service->description, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <div class="col-md-12 text-right">
            <a href="<?=PROOT?>services" class="btn btn-default">Cancel</a>
            <?= FH::submitTag('Save', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</form>