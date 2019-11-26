<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<section>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><?= __('Groups'); ?></a>
                            <div class="dropdown-menu dropdown-menu-arrow" >
                                <?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index'],['class'=>'dropdown-item ']) ?>
                                <?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add'],['class'=>'dropdown-item ']) ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class='row'>
    <div class="permissions col-xl-9">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title"><?= __('Add Permission') ?></h3>
            </div>
            <div class="card-body mb-0">  
                <?= $this->Form->create($permission,['class'=>'form-horizontal']) ?>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="pluginLabel"><?= __('plugin') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('plugin', ['label'=>false,'empty'=>true]);?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="controllerLabel"><?= __('controller') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('controller', ['label'=>false]);?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="actionLabel"><?= __('action') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('action', ['label'=>false]);?>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="Label"><?= __('') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('groups._ids', ['options' => $groups]); ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>"btn btn-primary waves-effect waves-light"]) ?>
        <?= $this->Form->end() ?>
                </div>
            </div>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Actions') ?></h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('List Permissions'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
     function create_permitions(){
        console.log('test');
         window.open('')
         ;
     };
</script>