<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clss index large-9 medium-8 columns content">
    <h3><?= __('Classes') ?></h3>
    <table cellpadding="0" cellspacing="0" id="dataTable">
        <thead>
            <tr>
                
                <!-- Cake Default
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('section') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('batch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                -->

                <!-- For Data Tables -->
                <th>Id</th>
                <th>Name</th>
                <th>Section</th>
                <th>Room Id</th>
                <th>Batch</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clss as $cls): ?>
            <tr>
                <td><?= $this->Number->format($cls->id) ?></td>
                <td><?= h($cls->name) ?></td>
                <td>
                    <!--<?= $this->Number->format($cls->section) ?>-->
                    <?php
                        switch ($this->Number->format($cls->section)) {
                            case 1:
                                echo "A";
                                break;
                            case 2:
                                echo "B";
                                break;
                            case 3:
                                echo "C";
                                break;
                            default:
                                echo "D";
                        }
                    ?>
                </td>
                <td><?= $cls->has('room') ? $this->Html->link($cls->room->name, ['controller' => 'Rooms', 'action' => 'view', $cls->room->id]) : '' ?></td>
                <td><?= h($cls->batch) ?></td>
                <td><?= h($cls->created) ?></td>
                <td><?= h($cls->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cls->id)]) ?>
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