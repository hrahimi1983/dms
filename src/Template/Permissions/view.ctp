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
<div class= 'row'>
    <div class="col-sm-9 col-md-9 col-lg-p">
        <div class= 'row'>       
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h3><?= h($permission->id) ?></h3></h3>
                </div>
                <div class="card-body">    
                    <table class="vertical-table">
                        <tr>
                            <th scope="row"><?= __('Plugin') ?></th>
                            <td><?= h($permission->plugin) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Controller') ?></th>
                            <td><?= h($permission->controller) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Action') ?></th>
                            <td><?= h($permission->action) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($permission->id) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h4><?= __('Related Groups') ?></h4></h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($permission->groups)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Name') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($permission->groups as $groups): ?>
                            <tr>
                                <td><?= h($groups->id) ?></td>
                                <td><?= h($groups->name) ?></td>
                                <td><?= h($groups->created) ?></td>
                                <td><?= h($groups->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id],['class'=>'btn btn-outline-warning btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Permission'), ['class'=>'btn btn-outline-danger btn-pill','action' => 'delete', $permission->id], ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Permissions'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Permission'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
