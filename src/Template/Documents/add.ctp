<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<section>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><?= __('Types'); ?></a>
                            <div class="dropdown-menu dropdown-menu-arrow" >
                                <?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index'],['class'=>'dropdown-item ']) ?>
                                <?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add'],['class'=>'dropdown-item ']) ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><?= __('Tags'); ?></a>
                            <div class="dropdown-menu dropdown-menu-arrow" >
                                <?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index'],['class'=>'dropdown-item ']) ?>
                                <?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add'],['class'=>'dropdown-item ']) ?>
                            </div>
                        </li>
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
    <div class="documents col-xl-9">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title"><?= __('Add Document') ?></h3>
            </div>
            <div class="card-body mb-0">  
                <?= $this->Form->create($document,['type' => 'file','class'=>'form-horizontal']) ?>
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-md-12">
                                 <div class="form-group">
                                    <div class="custom-file">
                                        <?php echo $this->Form->file('file', ['class'=>'form-control','label' => false,'type' => 'file','empty'=>false]); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">        
                                        <div class="col-md-3">
                                            <label class="form-label" id="titleLabel"><?= __('Title') ?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <?php echo $this->Form->control('title', ['class'=>'form-control','label'=>false]);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <div class="row">        
                                        <div class="col-md-3">
                                            <label class="form-label" id="type_idLabel"><?= __('Type') ?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <?php echo $this->Form->control('type_id', ['class'=>'form-control','label'=>false,'options' => $types]);?>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <div class="row">        
                                        <div class="col-md-3">
                                            <label class="form-label" id="Label"><?= __('Users') ?></label>
                                        </div>
                                        <div class="col-md-9">
                                            <?php echo $this->Form->control('users._ids', ['class'=>'form-control','options' => $users,'label'=>false]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>"btn btn-primary waves-effect waves-light"]) ?>
                <?= $this->Form->end() ?>
            </div>
            <div class="card-footer">
                <div id="pdf-view" class="row">
                </div>                
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
                    <li class="list-group-item"><?= $this->Html->link(__('List Documents'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>