<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<section>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><?= __('Users'); ?></a>
                            <div class="dropdown-menu dropdown-menu-arrow" >
                                <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'dropdown-item ']) ?>
                                <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'dropdown-item ']) ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class='row'>
    <div class="groups col-xl-9">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title"><?= __('Edit Group') ?></h3>
            </div>
            <div class="card-body mb-0">  
                <?= $this->Form->create($group,['class'=>'form-horizontal']) ?>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="nameLabel"><?= __('name') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('name', ['label'=>false]);?>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <div class="row">        
                                <div class="col-md-3">
                                    <label class="form-label" id="Label"><?= __('') ?></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('permissions._ids', ['options' => $permissions]); ?>
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
                    <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $group->id],
                        ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $group->id)]
                        )?>
                    </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Groups'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?></li>

                </ul>
            </div>
        </div>
    </div>
</div>