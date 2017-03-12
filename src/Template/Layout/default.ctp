<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'A School Management App Developed Using CakePHP';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <!-- Removed, But kept for future example ! -->
    <!--
    <?= $this->Html->script('filter_table')?>
    -->
    
    <!-- Angular
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!--<body style="background-image: url('<?= $this->Url->image("bg.jpg") ?>');">-->
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <!-- 
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
                -->
                <li><?=$this->Html->link('Attendences','/attendences')?></li>
                <li><?=$this->Html->link('Classes','/classes')?></li>
                <li><?=$this->Html->link('Rooms','/rooms')?></li>
                <li><?=$this->Html->link('Rosters','/rosters')?></li>
                <li><?=$this->Html->link('Students','/students')?></li>
                <li><?=$this->Html->link('Stuffs','/stuffs')?></li>
                <li><?=$this->Html->link('Subjects','/subjects')?></li>
                <li><?=$this->Html->link('Teachers','/teachers')?></li>
                <li><?=$this->Html->link('Notices','/notices')?></li>
            </ul>
            <ul class="right">
               <li><?=$this->Html->link('Log Out',['controller' => 'users', 'action' => 'logout'])?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <br>
    <footer>
        <div class="panel">
            <p>&copy; Free &#64; <?=date('Y')?>. Developed by <?=$this->Html->link('Zia','https://github.com/zia')?></p>
        </div>
    </footer>

    <!-- Data Tables JS -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
</body>
</html>
