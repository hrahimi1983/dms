<!--App-Header-->
<div class="app-header1 header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="<?php echo $this->URL->build(['controller' => 'users', 'action' => 'dashboard', '_full' => true],['class' => 'button', 'target' => '_blank']); ?>">
                <?php echo $this->Html->image('logo.png', ['alt' => 'Solutions-apps-logo','class'=>'header-brand-img']); ?>
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex" >
                    <a  class="nav-link icon full-screen-link">
                        <i class="fe fe-maximize-2"  id="fullscreen-button"></i>
                    </a>
                </div>
                <div class="dropdown d-none d-md-flex country-selector">
                    <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
                        <?php echo $this->Html->image('us_flag.jpg', ['alt' => 'us_flag','class'=>'avatar avatar-xs mr-1 align-self-center']); ?>
                        <div>
                            <strong class="text-dark">English</strong>
                        </div>
                    </a>
                    <div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <?php echo $this->Html->image('germany_flag.jpg', ['alt' => 'germany_flag.jpg','class'=>'avatar  mr-3 align-self-center']); ?>
                            <div>
                                <strong>Germany</strong>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="dropdown ">
                    <a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
                        <?php echo $this->Html->image('logo.png' ,['alt'=>"logo.png", 'class'=>"avatar avatar-md brround"]);?></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'view', $this->getRequest()->getSession()->read('Auth.User.id'),'_full' => true]); ?>">
                            <i class="dropdown-icon icon icon-user"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'logout', '_full' => true]); ?>">
                            <i class="dropdown-icon icon icon-power"></i> 
                            <?= __('Logout');?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>