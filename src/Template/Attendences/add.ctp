<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['controller' => 'Rosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roster'), ['controller' => 'Rosters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendences form large-9 medium-8 columns content">
    <?= $this->Form->create($attendence) ?>
    <fieldset>
        <legend><?= __('Add Attendence') ?></legend>
        <?php
            echo $this->Form->input('status');
            echo $this->Form->input('student_id', ['options' => $students]);
            echo $this->Form->input('roster_id', ['options' => $rosters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
