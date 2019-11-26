<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div>
    <?= $this->Form->create() ?>									
	<div class="form-group" >
    	<label class="form-label text-dark">Email address</label>
    	<?= $this->Form->control('email',['label'=>false,'class'=>'form-control','placeholder'=>"Enter email"]) ?>
    </div>
    <?= $this->Form->button(__('send new password'),['class'=>"btn btn-primary btn-block"]) ?>
    <?= $this->Form->end() ?>
</div>
