<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Roster'), ['action' => 'edit', $roster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Roster'), ['action' => 'delete', $roster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rosters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roster'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clss'), ['controller' => 'Clss', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cls'), ['controller' => 'Clss', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rosters view large-9 medium-8 columns content">
    <h3><?= h($roster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cls') ?></th>
            <td><?= $roster->has('cls') ? $this->Html->link($roster->cls->name, ['controller' => 'Clss', 'action' => 'view', $roster->cls->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td><?= $roster->has('teacher') ? $this->Html->link($roster->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $roster->teacher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($roster->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($roster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($roster->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attendences') ?></h4>
        <?php if (!empty($roster->attendences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Roster Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($roster->attendences as $attendences): ?>
            <tr>
                <td><?= h($attendences->id) ?></td>
                <td><?= h($attendences->status) ?></td>
                <td><?= h($attendences->student_id) ?></td>
                <td><?= h($attendences->roster_id) ?></td>
                <td><?= h($attendences->created) ?></td>
                <td><?= h($attendences->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attendences', 'action' => 'view', $attendences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attendences', 'action' => 'edit', $attendences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendences', 'action' => 'delete', $attendences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
