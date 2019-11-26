<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission[]|\Cake\Collection\CollectionInterface $permissions
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
<div class="row">
    <div class="col-md-9 col-lg-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= __('Permissions') ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-index table-bordered border-top mb-0">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('plugin') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('controller') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('action') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($permissions as $permission): ?>
                                <tr>
                                    <td><?= $this->Number->format($permission->id) ?></td>
                                    <td><?= h($permission->plugin) ?></td>
                                    <td><?= h($permission->controller) ?></td>
                                    <td><?= h($permission->action) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $permission->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permission->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permission->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
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
                    <li class="list-group-item"><?= $this->Html->link(__('New Permission'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

