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
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="portfolio">Portfolio-View</a>
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
                <h2 class="text-center">My Product</h2>
                <p class="align-items-center"><a href="<?=PROOT?>portfolio/add" class="btn btn-info">Add Project</a></p>
                <table class="table table-striped table-condensed table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>web url</th>
                            <th>github link</th>
                            <th>Type</th>
                            <th>Client</th>
                            <th>screenshot</th>
                            <th>Opretion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->portfolio as $product): ?>
                            <tr>
                                <td>
                                    <a href="<?=PROOT?>portfolio/details/<?=$product->id?>"><?=$product->displayName();?></a>
                                </td>
                                <td><?=$product->web_url;?></td>
                                <td><?=$product->github_link;?></td>
                                <td><?=$product->type;?></td>
                                <td><?=$product->client;?></td>
                                <td><?=$product->screenshot;?></td>
                                <td>
                                    <a href="<?=PROOT?>portfolio/edit/<?=$product->id?>" class="btn btn-info btn-xs">
                                        <i class="glyphicon glyphicon-pencile"></i> Edit
                                    </a>
                                    <a href="<?=PROOT?>portfolio/delete/<?=$product->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are You Sure?')){ return false;}">
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