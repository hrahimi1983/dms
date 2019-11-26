<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!--/Page-Header-->
<div class="row">
	<div class="card mt-9 store">
		<div class="card-header">
			<h3><?= __('List of Documents');?></h3>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-index stripe table-bordered border-top mb-0">
				<thead>
					<tr>
						<th><?=__('title');?></th>
						<th><?= __('Auths');?></th>
						<th><?= __('Type');?></th>
						<th class="actions"><?= __('Actions');?></th>
					</tr>
				</thead>
				<?php foreach ($documents as $document): ?>
					<tr>
						<td><?= h($document->title) ?></td>

						<td><?= $document->has('Auth') ? $this->Html->link($document->Auth->name, ['controller' => 'Users', 'action' => 'view', $document->Auth->id]) : '' ?></td>
						<td><?= $document->type->name ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['controller'=>'documents','action' => 'view', $document->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
							<?= $this->Html->link(__('Edit'), ['controller'=>'documents','action' => 'edit', $document->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>



