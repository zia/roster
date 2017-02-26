<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendence'), ['action' => 'edit', $attendence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendence'), ['action' => 'delete', $attendence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rosters'), ['controller' => 'Rosters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roster'), ['controller' => 'Rosters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendences view large-9 medium-8 columns content">
    <h3><?= h($attendence->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $attendence->has('student') ? $this->Html->link($attendence->student->name, ['controller' => 'Students', 'action' => 'view', $attendence->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Roster') ?></th>
            <td><?= $attendence->has('roster') ? $this->Html->link($attendence->roster->id, ['controller' => 'Rosters', 'action' => 'view', $attendence->roster->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendence->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($attendence->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($attendence->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($attendence->modified) ?></td>
        </tr>
    </table>
</div>
