<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Roster'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rosters index large-9 medium-8 columns content">
    <h3><?= __('Rosters') ?></h3>
    <table cellpadding="0" cellspacing="0" id="dataTable">
        <thead>
            <tr>
                <!-- Cake Default
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                -->

                <!-- For Data Tables -->
                <th>Id</th>
                <th>Class Id</th>
                <th>Teacher id</th>
                <th>Description</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rosters as $roster): ?>
            <tr>
                <td><?= $this->Number->format($roster->id) ?></td>
                <td>
                    <?php
                        switch ($this->Number->format($roster->cls->section)) {
                            case 1:
                                $sect = 'A';
                                break;
                            case 2:
                                $sect = 'B';
                                break;
                            case 3:
                                $sect = 'C';
                                break;
                            default:
                                $sect = 'D';
                        }
                    ?>
                    <?= $roster->has('cls') ? $this->Html->link($roster->cls->name.'-'.$sect, ['controller' => 'Clss', 'action' => 'view', $roster->cls->id]) : '' ?>
                </td>
                <td><?= $roster->has('teacher') ? $this->Html->link($roster->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $roster->teacher->id]) : '' ?></td>
                <td><?= h($roster->description) ?></td>
                <td><?= h($roster->created) ?></td>
                <td><?= h($roster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roster->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!--
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
    -->
</div>
