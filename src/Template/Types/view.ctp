<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>
<section>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
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
                    <h3 class="card-title"><h3><?= h($type->name) ?></h3></h3>
                </div>
                <div class="card-body">    
                    <table class="vertical-table">
                        <tr>
                            <th scope="row"><?= __('Name') ?></th>
                            <td><?= h($type->name) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($type->id) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Created') ?></th>
                            <td><?= h($type->created) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Modified') ?></th>
                            <td><?= h($type->modified) ?></td>
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
                    <?php if (!empty($type->documents)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Auth Id') ?></th>
                            <th scope="col"><?= __('Title') ?></th>
                            <th scope="col"><?= __('Type Id') ?></th>
                            <th scope="col"><?= __('Path') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($type->documents as $documents): ?>
                            <tr>
                                <td><?= h($documents->id) ?></td>
                                <td><?= h($documents->auth_id) ?></td>
                                <td><?= h($documents->title) ?></td>
                                <td><?= h($documents->type_id) ?></td>
                                <td><?= h($documents->path) ?></td>
                                <td><?= h($documents->created) ?></td>
                                <td><?= h($documents->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id],['class'=>'btn btn-outline-warning btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Type'), ['class'=>'btn btn-outline-danger btn-pill','action' => 'delete', $type->id], ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Types'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Type'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
