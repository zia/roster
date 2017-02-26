<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['controller' => 'Rosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roster'), ['controller' => 'Rosters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendences index large-9 medium-8 columns content">
    <h3 class="large-8 medium-8 columns"><?= __('Attendences') ?></h3>
    <div class="large-4 medium-4 columns">
        <?php
            #lookup() method is in webroot/filter_table.js
            echo $this->Form->create();
            echo $this->Form->control('term', ['label' => false, 'placeholder' => 'Search', 'onkeyup' => 'lookUp()']);
            echo $this->Form->end();
        ?>
    </div>
    <table cellpadding="0" cellspacing="0" id="dataTable">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roster_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendences as $attendence): ?>
            <tr>
                <td><?= $this->Number->format($attendence->id) ?></td>
                <td>
                    <!--<?= $this->Number->format($attendence->status) ?>-->
                    <?=$this->Number->format($attendence->status) ? 'Present' : 'Absent';?>
                </td>
                <td><?= $attendence->has('student') ? $this->Html->link($attendence->student->name, ['controller' => 'Students', 'action' => 'view', $attendence->student->id]) : '' ?></td>
                <td><?= $attendence->has('roster') ? $this->Html->link($attendence->roster->id, ['controller' => 'Rosters', 'action' => 'view', $attendence->roster->id]) : '' ?></td>
                <td><?= h($attendence->created) ?></td>
                <td><?= h($attendence->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendence->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendence->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendence->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
