<?php $this->start('head'); ?>
<!-- main css -->
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<style>
    .olomon{
		background: linear-gradient(90deg, #1345e6 0%, #ed239f 100%);
		background-clip: border-box;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
    }
</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="<?=PROOT?>index">Home</a>
                        <a href="<?=PROOT?>about">About</a>
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
                <h2 class="text-center">My Services</h2>
                <p class="align-items-center"><a href="<?=PROOT?>services/add" class="btn btn-info">Add A Service</a></p>
                <table class="table table-striped table-condensed table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Titles</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->services as $service): ?>
                            <tr>
                                <td>
                                    <a href="<?=PROOT?>services/details/<?=$service->id?>"><?=$service->displayName();?></a>
                                </td>
                                <td><?=$service->description;?></td>
                                <td><?=$service->date;?></td>
                                <td>
                                    <a href="<?=PROOT?>services/edit/<?=$service->id?>" class="btn btn-info btn-xs">
                                        <i class="glyphicon glyphicon-pencile"></i> Edit
                                    </a>
                                    <a href="<?=PROOT?>services/delete/<?=$service->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are You Sure?')){ return false;}">
                                        <i class="glyphicon glyphicon-remove"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->




<?php $this->end(); ?>