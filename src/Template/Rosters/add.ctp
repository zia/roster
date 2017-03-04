<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rosters form large-9 medium-8 columns content">
    <?= $this->Form->create($roster) ?>
    <fieldset>
        <legend><?= __('Add Roster') ?></legend>
        <?php
            echo $this->Form->input('class_id', ['options' => $clss]);
            echo $this->Form->input('teacher_id', ['options' => $teachers, 'empty' => true]);
            echo $this->Form->input('description',['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div>
    <?php
        //print_r($clss);
        foreach ($clss as $key => $value) {
            echo $key.'->';
            foreach ($value as $k => $v) {
                echo $k.'->'.$v.',';
            }
            echo '<br>';
        }
    ?>
</div>