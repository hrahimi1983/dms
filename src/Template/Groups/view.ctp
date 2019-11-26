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
<div class= 'row'>
    <div class="col-sm-9 col-md-9 col-lg-p">
        <div class= 'row'>       
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h3><?= h($group->name) ?></h3></h3>
                </div>
                <div class="card-body">    
                    <table class="vertical-table">
                        <tr>
                            <th scope="row"><?= __('Name') ?></th>
                            <td><?= h($group->name) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($group->id) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Created') ?></th>
                            <td><?= h($group->created) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Modified') ?></th>
                            <td><?= h($group->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h4><?= __('Related Permissions') ?></h4></h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($group->permissions)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Plugin') ?></th>
                            <th scope="col"><?= __('Controller') ?></th>
                            <th scope="col"><?= __('Action') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($group->permissions as $permissions): ?>
                            <tr>
                                <td><?= h($permissions->id) ?></td>
                                <td><?= h($permissions->plugin) ?></td>
                                <td><?= h($permissions->controller) ?></td>
                                <td><?= h($permissions->action) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $permissions->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h4><?= __('Related Users') ?></h4></h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($group->users)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Name') ?></th>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Group Id') ?></th>
                            <th scope="col"><?= __('Password') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($group->users as $users): ?>
                            <tr>
                                <td><?= h($users->id) ?></td>
                                <td><?= h($users->name) ?></td>
                                <td><?= h($users->email) ?></td>
                                <td><?= h($users->group_id) ?></td>
                                <td><?= h($users->password) ?></td>
                                <td><?= h($users->created) ?></td>
                                <td><?= h($users->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id],['class'=>'btn btn-outline-warning btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Group'), ['class'=>'btn btn-outline-danger btn-pill','action' => 'delete', $group->id], ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Groups'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Group'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
