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
                ['action' => 'delete', $cls->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cls->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clss form large-9 medium-8 columns content">
    <?= $this->Form->create($cls) ?>
    <fieldset>
        <legend><?= __('Edit Class') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('section');
            echo $this->Form->input('room_id', ['options' => $rooms, 'empty' => true]);
            echo $this->Form->input('batch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
