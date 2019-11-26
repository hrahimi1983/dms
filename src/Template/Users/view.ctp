<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><?= __('Documents'); ?></a>
                            <div class="dropdown-menu dropdown-menu-arrow" >
                                <?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index'],['class'=>'dropdown-item ']) ?>
                                <?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add'],['class'=>'dropdown-item ']) ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class= 'row'>
    <div class="col-sm-9 col-md-9 col-lg-p">
        <div class= 'row'>       
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h3><?= h($user->name) ?></h3></h3>
                </div>
                <div class="card-body">    
                    <table class="vertical-table">
                        <tr>
                            <th scope="row"><?= __('Name') ?></th>
                            <td><?= h($user->name) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Email') ?></th>
                            <td><?= h($user->email) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Group') ?></th>
                            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h4><?= __('Related Documents') ?></h4></h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($user->documents)): ?>
                    <table class="table table-bordered border-top mb-0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Auth') ?></th>
                            <th scope="col"><?= __('Title') ?></th>
                            <th scope="col"><?= __('Type Id') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->documents as $documents): ?>
                                <tr>
                                    <td><?= $this->Number->format($documents->id) ?></td>
                                    <td><?= $documents->has('Auth') ? $this->Html->link($documents->Auth->name, ['controller' => 'Users', 'action' => 'view', $documents->Auth->id]) : '' ?></td>
                                    <td><?= h($documents->title) ?></td>
                                    <td><?= $documents->has('type') ? $this->Html->link($documents->type->name, ['controller' => 'Types', 'action' => 'view', $documents->type->id]) : '' ?></td>
                                    <td><?= h($documents->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller'=>'documents','action' => 'view', $documents->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                        <?= $this->Html->link('<i class="fa fa-upload fa-spin ml-2"></i>'.__(' Download'),['controller'=>'documents','action' => 'Download', $documents->id, '_full' => true],['escape' => false,'class'=>'btn btn-outline-info btn-sm mb-1']); ?>
                                        <?= $this->Html->link(__('Edit'), ['controller'=>'documents','action' => 'edit', $documents->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller'=>'documents','action' => 'delete', $documents->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $documents->title)]) ?>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id],['class'=>'btn btn-outline-warning btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete User'), ['class'=>'btn btn-outline-danger btn-pill','action' => 'delete', $user->id], ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
