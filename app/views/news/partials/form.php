<?php
use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post" enctype="multipart/form-data">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>
        <?= FH::inputBlock('text', 'News Title', 'title', $this->news->title, ['class'=>'form-control'], ['class'=>'form-group col-md-12']);?>
        <?=FH::textareaBlock('body Of The News', 'body', $this->news->body, ['class'=>'form-control', 'cols'=>'80', 'rows'=>'10'], ['class'=>'form-group col-md-12']);?>
        
        <?=FH::inputBlock('file', 'Photo Of The News', 'photo', $this->news->photo, ['class'=>'form-control'], ['class'=>'form-group col-md-8']);?>

        <div class="col-md-12 text-right">
            <a href="<?=PROOT?>news" class="btn btn-default">Cancel</a>
            <?= FH::submitTag('Save', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</form>