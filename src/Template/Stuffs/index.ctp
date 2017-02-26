<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stuff'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stuffs index large-9 medium-8 columns content">
    <h3 class="large-8 medium-8 columns"><?= __('Stuffs') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stuffs as $stuff): ?>
            <tr>
                <td><?= $this->Number->format($stuff->id) ?></td>
                <td><?= h($stuff->name) ?></td>
                <td><?= $this->Number->format($stuff->age) ?></td>
                
                <td>
                    <!--<?= $this->Number->format($stuff->gender) ?>-->
                    <?php
                        switch ($this->Number->format($stuff->gender)) {
                            case 0:
                                echo "Female";
                                break;
                            case 1:
                                echo "Male";
                                break;
                            case 2:
                                echo "Other";
                                break;
                            default:
                                echo "?";
                        }
                    ?>
                </td>
                
                <td><?= h($stuff->designation) ?></td>
                <td><?= h($stuff->description) ?></td>
                <td><?= $stuff->has('room') ? $this->Html->link($stuff->room->name, ['controller' => 'Rooms', 'action' => 'view', $stuff->room->id]) : '' ?></td>
                <td><?= $stuff->has('teacher') ? $this->Html->link($stuff->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $stuff->teacher->id]) : '' ?></td>
                <td><?= h($stuff->created) ?></td>
                <td><?= h($stuff->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stuff->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stuff->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stuff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stuff->id)]) ?>
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
