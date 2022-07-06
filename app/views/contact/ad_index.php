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
                  <h2>Contact</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="contact">Contact-View</a>
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
                <h2 class="text-center">Contact Us List</h2>
                <table class="table table-striped table-condensed table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->contact as $ct): ?>
                            <tr>
                                <td>
                                    <a href="<?=PROOT?>contact/details/<?=$ct->id?>"><?=$ct->displayName();?></a>
                                </td>
                                <td><?=$ct->email;?></td>
                                <td><?=$ct->subject;?></td>
                                <td><?=$ct->body;?></td>
                                <td>
                                    <a href="<?=PROOT?>contact/reply/<?=$ct->id?>" class="btn btn-primary btn-xs">
                                        <i class="glyphicon glyphicon-pencile"></i> Reply
                                    </a>
                                    <a href="<?=PROOT?>contact/delete/<?=$ct->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are You Sure?')){ return false;}">
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