<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
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
</div>
</section>
<div class="row">
    <div class="col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Documents') ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-index stripe table-bordered border-top mb-0">
                        <thead>
                            <tr>
                                <th><?= ('id') ?></th>
                                <th><?= ('auth_id') ?></th>
                                <th><?= ('title') ?></th>
                                <th><?= ('type_id') ?></th>
                                <th><?= ('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($documents as $document): ?>
                                <tr>
                                    <td><?= $this->Number->format($document->id) ?></td>
                                    <td><?= $document->has('Auth') ? $this->Html->link($document->Auth->name, ['controller' => 'Users', 'action' => 'view', $document->Auth->id]) : '' ?></td>
                                    <td><?= h($document->title) ?></td>
                                    <td><?= $document->has('type') ? $this->Html->link($document->type->name, ['controller' => 'Types', 'action' => 'view', $document->type->id]) : '' ?></td>
                                    <td><?= h($document->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $document->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                        <?= $this->Html->link('<i class="fa fa-upload fa-spin ml-2"></i>'.__(' Download'),['action' => 'Download', $document->id,'_full' => true],['escape' => false,'class'=>'btn btn-outline-info btn-sm mb-1']); ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
                    <li class="list-group-item"><?= $this->Html->link(__('New Document'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

