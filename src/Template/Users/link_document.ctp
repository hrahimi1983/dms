<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class='row'>
    <div class="users col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class ='col-xl-6'>
                    <h3 class="card-title"><?= __('Users') ?></h3>
                </div>
                <div class ='col-xl-6'>
                    <input type="text" name="search" id='search' onkeyup='searchUsers(this.value)' placeholder=<?= __('search');?>>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-top mb-0">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody id='tbody'>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="fa fa-link fa-spin ml-2"></i>'.__(' Link'), ['action' => 'link', $user->id,$document_id],['escape'=>false,'class'=>'btn btn-outline-info btn-sm mb-1']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
     function searchUsers(argument) {
        if (argument.length >2) {
            $( "#tbody" ).html( "" );
            var jqxhr = $.ajax( "<?=$this->Url->build(['controller'=>'users','action'=>'multiSearch']);?>"+"/"+argument)
                .done(function(data) {
                    html='';
                    users=data['users'];
                    users.forEach(function(value,index){
                        html+="<tr>";
                        html+="<td>";
                        html+=value['name'];
                        html+="</td>";
                        html+="<td>";
                        html+=value.email;
                        html+="</td>";
                        html+="<td>"; 
                        html+="<a class='btn btn-outline-info btn-sm mb-1' href='/users/link/"+value.id+'/'+"<?= $document_id?>"+"'><i class='fa fa-link fa-spin ml-2'></i>"+"<?= __(' Link')?>"+"</a>";
                        html+="</td>";
                        html+="</tr>";
                    })
                    $( "#tbody" ).html( html );
                })
                .fail(function() {
                    alert( "There is an system erorr. Please reload the page if the error is not fixed please contact the system administrator." );
                })
        }  
    }
 

</script>
