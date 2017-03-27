<?php

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

    <!-- Floating contact box-->
    <?= $this->Html->css('msg-slider.css')?>
    <!-- Font-awesome -->
    <?= $this->Html->css('font-awesome.css')?>

    <!-- Default -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

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
                            <a href="http://google.com"><i class='fa fa-plus-square'></i> New</a>
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
    <div id="sld" style="right:-306px;z-index:9999">
        <div id="sdb" onclick="open_panel()">
            <?=$this->Html->image('contact.png', ['alt' => 'Send Me A Message'])?>
        </div>
        <!-- Will add close button,foundation panel and input class -->
        <div id="msg-box" class="panel">
            <div class="row">
                <div class="large-12 medium-12 small-12 columns">
                    <form action="" method="" name="contact_form">
                        <fieldset>
                            <legend>
                                <div class="row">
                                    <div class="large-9 small-9 medium-9 columns">
                                        Contact Us
                                    </div>
                                    <div class="large-3 small-3 medium-3 columns" onclick="close_panel()" style="cursor: pointer;text-align: center;">
                                        &times;
                                    </div>
                                </div>
                            </legend>
                            <!-- Name Input -->
                            <div class="row">
                                <div class="small-12 large-12 medium-12 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="name" class="right inline">
                                                Name
                                            </label>
                                        </div>
                                        <div class="small-9 columns">
                                            <input type="text" pattern=".{3,}" class="error" name="name" placeholder="John Doe" required/>
                                            <?php
                                                $err = 0;
                                                if($err){
                                                    echo '<small class="error">Invalid Name</small>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Email Input -->
                            <div class="row">
                                <div class="small-12 large-12 medium-12 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="email" class="right inline">
                                                Email
                                            </label>
                                        </div>
                                        <div class="small-9 columns">
                                            <input type="email" name="email" placeholder="name@example.com" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="row">
                                <div class="small-12 large-12 medium-12 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="message" class="right inline">
                                                Message
                                            </label>
                                        </div>
                                        <div class="small-9 columns">
                                            <textarea placeholder="Your Message" name="msg" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4 medium-4 small-4 columns">
                                    <button class="button tiny" type="submit" style="float: left;">Send</button>
                                </div>
                                <div class="large-4 medium-4 small-4 columns">
                                    <button class="button tiny alert" type="reset" style="float: right;">Reset</button>
                                </div>
                                <div class="large-4 medium-4 small-4 columns">
                                    <button class="button tiny secondary" type="button" onclick="close_panel()" style="float: right;">Cancel</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Angular
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    -->

    <!-- JQuery -->
    <?=$this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')?>

    <!-- foundation js -->
    <?= $this->Html->script('foundation')?>
    <?= $this->Html->script('what-input')?>
    
    <!-- Floating contact box-->
    <?= $this->Html->script('msg-slider')?>
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
