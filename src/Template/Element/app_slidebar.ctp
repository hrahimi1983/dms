<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
	<div class="app-sidebar__user clearfix">
		<div class="dropdown user-pro-body">
			<div class="user-info">
				<h2><?php echo $this->getRequest()->getSession()->read('Auth.User.name'); ?></h2>
			</div>
		</div>
	</div>
	<ul class="side-menu">
		<li>
			<a class="side-menu__item" href="<?=$this->Url->build(['controller'=>'users','action'=>'dashboard']);?>"><i class="side-menu__icon fa fa-dashboard"></i><span class="side-menu__label"><?= __('Dashboard');?></span></a>
		</li>


		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file"></i><span class="side-menu__label"><?= __('Documents');?></span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li>
					<a href="<?=$this->Url->build(['controller'=>'documents','action'=>'index']);?>" class="slide-item"><i class="side-menu__icon fa fa-list"></i><?= __('List Documents');?></a>
				</li>
				<li>
					<a href="<?=$this->Url->build(['controller'=>'documents','action'=>'add']);?>" class="slide-item"><i class="side-menu__icon fa fa-plus"></i><?= __('New Document');?></a>
				</li>
			</ul>
		</li>
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label"><?= __('Documents Types');?></span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li>
					<a href="<?=$this->Url->build(['controller'=>'types','action'=>'index']);?>" class="slide-item"><i class="side-menu__icon fa fa-list"></i><?= __('List Types');?></a>
				</li>
				<li>
					<a href="<?=$this->Url->build(['controller'=>'types','action'=>'add']);?>" class="slide-item"><i class="side-menu__icon fa fa-plus"></i><?= __('New Type');?></a>
				</li>
			</ul>
		</li>
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tag"></i><span class="side-menu__label"><?= __('Documents Tags');?></span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li>
					<a href="<?=$this->Url->build(['controller'=>'Tags','action'=>'index']);?>" class="slide-item"><i class="side-menu__icon fa fa-list"></i><?= __('List Tags');?></a>
				</li>
				<li>
					<a href="<?=$this->Url->build(['controller'=>'Tags','action'=>'add']);?>" class="slide-item"><i class="side-menu__icon fa fa fa-plus"></i><?= __('New Tags');?></a>
				</li>
			</ul>
		</li>
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label"><?= __('Users');?></span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li>
					<a href="<?=$this->Url->build(['controller'=>'users','action'=>'index']);?>" class="slide-item"><i class="side-menu__icon fa fa-list"></i><?= __('List Users');?></a>
				</li>
				<li>
					<a href="<?=$this->Url->build(['controller'=>'users','action'=>'add']);?>" class="slide-item"><i class="side-menu__icon fa fa-plus"></i><?= __('New User');?></a>
				</li>
			</ul>
		</li>
	<div class="app-sidebar-footer">
		<a href="<?=$this->Url->build(['controller'=>'users','action'=>'view',$this->getRequest()->getSession()->read('Auth.User.id')]);?>">
			<span class="fa fa-user" aria-hidden="true"></span>
		</a>
		<a href="<?=$this->Url->build(['controller'=>'users','action'=>'edit',$this->getRequest()->getSession()->read('Auth.User.id')]);?>">
			<span class="fa fa-cog" aria-hidden="true"></span>
		</a>
		<a href="<?=$this->Url->build(['controller'=>'users','action'=>'logout']);?>">
			<span class="fa fa-sign-in" aria-hidden="true"></span>
		</a>
	</div>
</aside>