<?php
    use Core\Session;
    use Core\H;
    use Core\Router;
    use App\Models\Users;
    $menu = Router::getMenu('menu_acl');
    $currentPage = H::currentPage();//H::dnd($menu);
?>

<!--================ Start Header Area =================-->
<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="<?=PROOT;?>home"><img src="<?=PROOT;?>img/logo.png" alt=""></a>
				<a class="navbar-brand logo_inner_page" href="<?=PROOT;?>home"><img src="<?=PROOT;?>img/logo2.png" alt=""></a>      
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav">
                    <?php foreach ($menu as $key => $val): 
                        $active = ''; ?>
                        <?php if(is_array($val)): ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$key;?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <?php foreach ($val as $k => $v): 
                                    $active = ($v == $currentPage)? 'active' : ''; ?>
                                    <?php if($k == 'separator'): ?>
                                        <li role="separator" class="divider"></li>
                                    <?php else: ?>
                                        <li class="nav-item <?=$active;?>"><a class="nav-link" href="<?=$v?>"><?=$k;?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </ul>
                            </li>
                            
                        <?php else:  
                            $active = ($val == $currentPage)? 'active' : '';?>
                            <li class="nav-item <?=$active;?>"><a class="nav-link" href="<?=$val?>"><?=$key;?></a></li>
                        <?php endif;  ?>
                    <?php endforeach; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <?php if(Users::currentUser()): ?>
                        <li><a href="#">Hello <?=Users::currentUser()->fname;?></a></li>
                    <?php endif; ?>
                    </ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<!--================ End Header Area =================-->