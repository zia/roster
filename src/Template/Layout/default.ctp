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

    <?= $this->Html->css('msg-slider.css')?>
    <?= $this->Html->css('font-awesome.css')?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('msg-slider')?>
    
    <!-- Angular
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    -->

    <!-- JQuery -->
    <?=$this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')?>

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/zf-5.5.2/jq-2.2.4/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fh-3.1.2/kt-2.2.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!--<body style="background-image: url('<?= $this->Url->image("bg.jpg") ?>');">-->
<body>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php if($loggedIn){?>
            <ul class="left">
                <li class="has-dropdown">
                    <?=$this->Html->link(__('<i class="fa fa-cubes"></i> Attendances'),'#', ['escape' => false])?>
                    <ul class="dropdown">
                        <li>
                            <?=$this->Html->link(__('<i class="fa fa-list"></i> List'),'/attendences', ['escape' => false])?>
                        </li>
                        <li class="active">
                            <a href="#"><i class='fa fa-plus-square'></i> New</a>
                        </li>
                    </ul>
                </li>
                <li><?=$this->Html->link(__('<i class="fa fa-users"></i> Classes'),'/classes', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-building"></i> Rooms'),'/rooms', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-list"></i> Rosters'),'/rosters', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-graduation-cap"></i> Students'),'/students', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-spin fa-cog"></i> Stuffs'),'/stuffs', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-book"></i> Subjects'),'/subjects', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-user-circle"></i> Teachers'),'/teachers', ['escape' => false])?></li>
                <li><?=$this->Html->link(__('<i class="fa fa-flag"></i> Notices'),'/notices', ['escape' => false])?></li>
            </ul>
            <ul class="right">
                <li>
                    <!--
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Log Out', array('controller' => 'Users', 'action' => 'logout'), array('escape' => false)) ?>
                    -->
                    
                    <?= $this->Html->link(__("<i class='fa fa-sign-out'></i> Log Out"), ['controller'=> 'Users','action' => 'logout'], ['escape' => false])?>
               </li>
            </ul>
            <?php } ?>
        </section>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <br>
    <footer>
        <div class="panel">
            <p class="text-center">&copy; Free &#64; <?=date('Y')?>. Developed by <?=$this->Html->link('Zia','https://github.com/zia')?></p>
        </div>
    </footer>

    <!-- Sliding Message Box -->
    <div id="sld" style="right:-342px;z-index:9999">
        <div id="sdb" onclick="open_panel()">
            <?=$this->Html->image('contact.png', ['alt' => 'Send Me A Message'])?>
        </div>
        <div id="msg-box">
            <h4>Contact Form</h4>
            <hr>
            <input type="text" name="dname" placeholder="Your Name">
            <input type="text" name="demail" placeholder="Your Email">
            <h4>Query type</h4>
            <select>
                <option>General Query</option>
                <option>Presales</option>
                <option>Technical</option>
                <option>Others</option>
            </select>
            <textarea type="text" placeholder="message"></textarea><br>
            <button>Send Message</button>   
        </div>
    </div>

    <!-- Data Tables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/zf-5.5.2/jq-2.2.4/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/fh-3.1.2/kt-2.2.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTable').dataTable({
                
            });
        } );
    </script>
</body>
</html>
