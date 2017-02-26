<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Class'), ['action' => 'edit', $cls->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Class'), ['action' => 'delete', $cls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cls->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clss view large-9 medium-8 columns content">
    <h3><?= h($cls->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cls->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $cls->has('room') ? $this->Html->link($cls->room->name, ['controller' => 'Rooms', 'action' => 'view', $cls->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Batch') ?></th>
            <td><?= h($cls->batch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cls->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Section') ?></th>
            <td>
                <!-- <?= $this->Number->format($cls->section) ?> -->
                <?php
                        if($this->Number->format($cls->section) == 1){
                            echo "A";
                        }
                        elseif ($this->Number->format($cls->section) == 2) {
                            echo "B";
                        }
                        else{
                            echo "C";
                        }
                    ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cls->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cls->modified) ?></td>
        </tr>
    </table>
</div>
