<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clss'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cls'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rosters form large-9 medium-8 columns content">
    <?= $this->Form->create($roster) ?>
    <fieldset>
        <legend><?= __('Edit Roster') ?></legend>
        <?php
            echo $this->Form->input('class_id', ['options' => $clss]);
            echo $this->Form->input('teacher_id', ['options' => $teachers, 'empty' => true]);
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
