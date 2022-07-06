<?php $this->setSiteTitle($this->service->displayName()); ?>
<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">

<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 col-md-offset-2 well">
    <a href="<?=PROOT?>services" class="btn btn-xs btn-default">Back</a>
    <h2 class="text-center grey"><?=ucwords($this->service->displayName());?></h2>
    <div class="col-md-6">
        <p><strong>Email: </strong><?=$this->service->web_url?></p>

        <p><strong>Cell Phone: </strong><?=$this->service->github_link?></p>

        <p><strong>Home Phone: </strong><?=$this->service->type?></p>
        
        <p><strong>Work Phone: </strong><?=$this->service->client?></p>
        <p><strong>Work Phone: </strong><?=$this->service->description?></p>
    </div>
    <div class="col-md-6">
        <?=$this->service->screenshot; ?>
    </div>
</div>
<?php $this->end(); ?> 