<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

    $this->start('file');
?>



<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?php if ($error instanceof Error) : ?>
        <strong>Error in: </strong>
        <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')) :
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?>
<div class="page construction-image">
    <div class="page-content z-index-10">
        <div class="container text-center text-white">
            <div class="display-1 mb-5"> <?= $code ?></div>
            <h1 class="h2  mb-3"><?= h($message) ?></h1>
            <p class="h4 font-weight-normal mb-7 leading-normal">  <?= __d('cake', 'Oops!!!! you tried to access a page {0} which is not available. go back to Home.', "<strong>'{$url}'</strong>") ?></p>
            <a class="btn btn-primary" href="<?=$this->Url->build(['controller'=>'users','action'=>'dashboard'])?>">    Back To Home</a>
        </div>
    </div>
</div>