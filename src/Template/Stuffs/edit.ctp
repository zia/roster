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
                ['action' => 'delete', $stuff->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stuff->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stuffs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stuffs form large-9 medium-8 columns content">
    <?= $this->Form->create($stuff) ?>
    <fieldset>
        <legend><?= __('Edit Stuff') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('age');
            echo $this->Form->input('gender');
            echo $this->Form->input('designation');
            echo $this->Form->input('description');
            echo $this->Form->input('room_id', ['options' => $rooms, 'empty' => true]);
            echo $this->Form->input('teacher_id', ['options' => $teachers, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
