<?
use Core\H;
?>
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
                  <h2>Profile</h2>
                  <div class="page_link">
                      <a href="index">admin</a>
                      <a href="company">Profile-View</a>
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
                    <h2 class="text-center">My Profile</h2>
                    <table class="table table-striped table-condensed table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>username</th>
                                <th>Emaill</th>
                                <th>phone</th>
                                <th>State</th>
                                <th>Address</th>
                                <th>Pix</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="<?=PROOT?>register/details/<?=$this->profile->id?>"><?=$this->profile->displayName();?></a>
                                </td>
                                <td><?=$this->profile->username;?></td>
                                <td><?=$this->profile->email;?></td>
                                <td><?=$this->profile->phone;?></td>
                                <td><?=$this->profile->state;?></td>
                                <td><?=$this->profile->address;?></td>
                                <td><?=$this->profile->pix;?></td>
                                <td>
                                    <a href="<?=PROOT?>register/edit/<?=$this->profile->id?>" class="btn btn-info btn-xs">
                                        <i class="glyphicon glyphicon-pencile"></i> Edit
                                    </a>
                                    <!-- <a href="<?=PROOT?>register/delete/<?=$this->profile->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are You Sure?')){ return false;}">
                                        <i class="glyphicon glyphicon-remove"></i> Delete
                                    </a> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</section>
    <!--================ End About Us Area =================-->
  <?php $this->end(); ?>