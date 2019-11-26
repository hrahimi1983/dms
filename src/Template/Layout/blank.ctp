<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$DMSDescription = 'Documents Managment System by Solutions-Apps';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset('UTF-8') ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $DMSDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css') ?>
    <?= $this->Html->css('plugins/toggle-sidebar/sidemenu.css') ?>
    <?= $this->Html->css('admin-custom.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('plugins/scroll-bar/jquery.mCustomScrollbar.css') ?>
    <?= $this->Html->css('fonts/font-awesome.min.css') ?>
    <?= $this->Html->css('icons.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
        <!-- JQuery js-->
        <?= $this->Html->script('vendors/jquery-3.2.1.min.js') ?>
        <!-- Bootstrap js -->
        <?= $this->Html->script('plugins/bootstrap-4.3.1-dist/js/popper.min.js') ?>
        <?= $this->Html->script('plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') ?>
        <!--JQuery Sparkline Js-->
        <?= $this->Html->script('vendors/jquery.sparkline.min.js') ?>
        <!-- Circle Progress Js-->
        <?= $this->Html->script('vendors/circle-progress.min.js') ?>
        <!-- Star Rating Js-->
        <?= $this->Html->script('plugins/rating/jquery.rating-stars.js') ?>
        <!-- Fullside-menu Js-->
        <?= $this->Html->script('plugins/toggle-sidebar/sidemenu.js') ?>
        <!-- Custom scroll bar Js-->
        <?= $this->Html->script('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') ?>
        <!--Counters -->
        <?= $this->Html->script('plugins/counters/counterup.min.js') ?>
        <?= $this->Html->script('plugins/counters/waypoints.min.js') ?>
        <!-- Custom Js-->
        <?= $this->Html->script('admin-custom.js') ?>

        <?= $this->fetch('script') ?>
</body>
</html>
