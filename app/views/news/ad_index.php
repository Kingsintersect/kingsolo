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
                  <h2>News</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="news">News-View</a>
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
                <div class="col-md-12">
                    <h2 class="text-center">All News</h2>
                    <p class="align-items-center"><a href="<?=PROOT?>news/add" class="btn btn-primary">Add News</a></p>
                    <table class="table table-striped table-condensed table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>News Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Date</th>
                                <th>Opretion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->news as $new): ?>
                                <tr>
                                    <td><img src="<?=$new->photo;?>" alt="image" width="200px" height="100px"></td>
                                    <td>
                                        <a href="<?=PROOT?>news/details/<?=$new->id?>"><?=$new->displayName();?></a>
                                    </td>
                                    <td><?=substr($new->body, 0, 200).' ...';?></td>
                                    <td><?=$new->date;?></td>
                                    <td width="15%">
                                        <a href="<?=PROOT?>news/edit/<?=$new->id?>" class="btn btn-info btn-xs">
                                            <i class="glyphicon glyphicon-pencile"></i> Edit
                                        </a>
                                        <a href="<?=PROOT?>news/delete/<?=$new->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are You Sure?')){ return false;}">
                                            <i class="glyphicon glyphicon-remove"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->
  <?php $this->end(); ?>
