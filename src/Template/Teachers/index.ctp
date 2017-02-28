<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clss'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cls'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['controller' => 'Rosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roster'), ['controller' => 'Rosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stuffs'), ['controller' => 'Stuffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stuff'), ['controller' => 'Stuffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teachers index large-9 medium-8 columns content">
    <h3 class="large-8 medium-8 columns"><?= __('Teachers') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teachers as $teacher): ?>
            <tr>
                <td><?= $this->Number->format($teacher->id) ?></td>
                <td><?= h($teacher->name) ?></td>
                <td><?= h($teacher->phone) ?></td>
                <td><?= h($teacher->password) ?></td>
                <td><?= $teacher->has('cls') ? $this->Html->link($teacher->cls->name, ['controller' => 'Clss', 'action' => 'view', $teacher->cls->id]) : '' ?></td>
                <td><?= $teacher->has('subject') ? $this->Html->link($teacher->subject->name, ['controller' => 'Subjects', 'action' => 'view', $teacher->subject->id]) : '' ?></td>
                <td><?= h($teacher->created) ?></td>
                <td><?= h($teacher->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teacher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teacher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?>
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
