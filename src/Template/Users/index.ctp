<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
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
<div class="row">
    <div class="col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Users') ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-index stripe table-bordered border-top mb-0">
                        <thead>
                            <tr>
                                <th><?= ('id') ?></th>
                                <th><?= ('name') ?></th>
                                <th><?= ('email') ?></th>
                                <th><?= ('group_id') ?></th>
                                <th><?= ('created') ?></th>
                                <th><?= ('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>


