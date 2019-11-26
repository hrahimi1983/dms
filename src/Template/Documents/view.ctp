<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<style>
.pdfobject-container { height: 40rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
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
</section>
<div class= 'row'>
    <div class="col-sm-9 col-md-9 col-lg-p">
        <div class= 'row'>       
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h3><?= h($document->title) ?></h3></h3>
                </div>
                <div class="card-body">    
                    <table class="vertical-table">
                        <tr>
                            <th scope="row"><?= __('Title') ?></th>
                            <td><?= h($document->title) ?></td>
                            <th scope="row"><?= __('Auth') ?></th>
                            <td><?= $document->has('Auth') ? $this->Html->link($document->Auth->name, ['controller' => 'Users', 'action' => 'view', $document->Auth->id]) : '' ?></td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <th scope="row"><?= __('Type') ?></th>
                            <td><?= $document->has('type') ? $this->Html->link($document->type->name, ['controller' => 'Types', 'action' => 'view', $document->type->id]) : '' ?></td>
                            <th scope="row"><?= __('Modified') ?></th>
                            <td><?= h($document->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
       <div id="pdfviewer"></div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h4><?= __('Related Tags') ?></h4></h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($document->tags)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($document->tags as $tags): ?>
                            <tr>
                                <td><?= h($tags->id) ?></td>
                                <td><?= h($tags->name) ?></td>
                                <td><?= h($tags->value) ?></td>
                                <td><?= h($tags->created) ?></td>
                                <td><?= h($tags->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id],['class'=>'btn btn-outline-warning btn-sm mb-1']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
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
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id],['class'=>'btn btn-outline-warning btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Document'), ['class'=>'btn btn-outline-danger btn-pill','action' => 'delete', $document->id], ['class'=>'btn btn-outline-danger btn-pill','confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Documents'), ['action' => 'index'],['class'=>'btn btn-outline-info btn-pill']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Document'), ['action' => 'add'],['class'=>'btn btn-outline-primary btn-pill']) ?> </li>
                </ul>
            </div>
        </div>
        <div class="related">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= __('Related Users') ?>
                         <button type="button" class="btn btn-outline-info btn-sm mb-1" data-toggle="modal" data-target="#exampleModalLong" onClick="loadUsers()" ><i class="fa fa-link fa-spin ml-2"></i> <?= __('Link');?></button>

                    </h3>
                </div>
                <div class="card-body">   
                    <?php if (!empty($document->users)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Name') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($document->users as $users): ?>
                            <tr>
                                <td><?= h($users->name) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id],['class'=>'btn btn-outline-info btn-sm mb-1']) ?>

                                    <?= $this->Form->postLink(__('Unlink')."<i class='fa fa-unlink fa-spin ml-2'></i>", ['controller' => 'Users', 'action' => 'unlinkDocument', $users->id,$document->id], ['escape' => false,'class'=>'btn btn-outline-danger btn-sm mb-1','confirm' => __('Are you sure you want to delete # {0} relation?', $users->name)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Scrolling Modal-->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= __('User List');?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div id='users_modal' class="modal-body">

                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="/js/pdfobject.js"></script>
<script>PDFObject.embed("<?=$this->Url->build(['action'=>'toBrowser',$document->id]);?>", "#pdfviewer");</script>
<script type="text/javascript">
    function loadUsers() {
        var jqxhr = $.ajax( "<?=$this->Url->build(['controller'=>'users','action'=>'linkDocument',$document->id]);?>" )
            .done(function(html) {
                $( "#users_modal" ).html( html );
            })
            .fail(function() {
                alert( "There is an system erorr. Please reload the page if the error is not fixed please contact the system administrator." );
            })

}

</script>
