<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
	<div class="form-group" >
    	<label class="form-label text-dark">Email address</label>
    	<?= $this->Form->control('email',['label'=>false,'class'=>'form-control','placeholder'=>"Enter email"]) ?>
    </div>
    <div class="form-group">
		<label class="form-label text-dark">Password</label>
    	<?= $this->Form->control('password',['label'=>false,'class'=>'form-control','id'=>"exampleInputPassword1",'placeholder'=>"Password"]) ?>
	</div>
	<div class="form-group">
		<label class="custom-control custom-checkbox">
		<?php echo $this->Html->link(__('I forgot password'),['controller' => 'users', 'action' => 'resetPassword', '_full' => true],['class' => 'float-right small text-dark mt-1', 'target' => '_blank']); ?>
		</label>
	</div>	
    <?= $this->Form->button('Login',['class'=>"btn btn-primary btn-block"]) ?>
    <?= $this->Form->end() ?>
</div>
