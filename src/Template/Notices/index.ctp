<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notices index large-9 medium-8 columns content">
    <h3><?= __('Notices') ?></h3>
    <table cellpadding="0" cellspacing="0" id="dataTable">
        <thead>
            <tr>
                <!-- Cake Default
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                -->

                <!-- For Data Tables -->
                <th>id</th>
                <th>title</th>
                <th>teacher_id</th>
                <th>description</th>
                <th>created</th>
                <!--<th>modified</th>-->
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notices as $notice): ?>
            <tr>
                <td><?= $this->Number->format($notice->id) ?></td>
                <td><?= h($notice->title) ?></td>
                <td><?= $notice->has('teacher') ? $this->Html->link($notice->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $notice->teacher->id]) : '' ?></td>
                <td><?= h($notice->description) ?></td>
                <td><?= h($notice->created) ?></td>
                <!--<td><?= h($notice->modified) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $notice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]) ?>
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
