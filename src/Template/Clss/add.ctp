<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clss form large-9 medium-8 columns content">
    <?= $this->Form->create($cls) ?>
    <fieldset>
        <legend><?= __('Add Class') ?></legend>
        <?=$this->Form->input('name')?>
        <div class="input select">
            <label for="section">Section</label>
            <select name="section" id="section">
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
            </select>
        </div>
        <?php
            echo $this->Form->input('room_id', ['options' => $rooms, 'empty' => true]);
            echo $this->Form->input('batch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
