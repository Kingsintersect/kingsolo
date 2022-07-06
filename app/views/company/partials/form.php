<?php
    use Core\FH;
?>
<form action="<?=$this->postAction; ?>" class="form" method="post">
    <div class="row">
        <?= FH::displayErrors($this->displayErrors);?>
        <?= FH::csrfInput();?>
        <?= FH::inputBlock('text', 'Company Name', 'name', $this->company->name, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Company logo', 'logo', $this->company->logo, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'front page sliders', 'sliders', $this->company->sliders, ['class'=>'form-control'], ['class'=>'form-group col-md-6']);?>

        <?=FH::inputBlock('text', 'Braches Of the company', 'branches', $this->company->branches, ['class'=>'form-control'], ['class'=>'form-group col-md-5']);?>

        <?=FH::inputBlock('text', 'Address', 'address', $this->company->address, ['class'=>'form-control'], ['class'=>'form-group col-md-3']);?>

        <?=FH::inputBlock('text', 'Website Of the Company', 'website', $this->company->website, ['class'=>'form-control'], ['class'=>'form-group col-md-4']);?>

        <div class="col-md-12 text-right">
            <a href="<?=PROOT?>company" class="btn btn-default">Cancel</a>
            <?= FH::submitTag('Save', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</form>