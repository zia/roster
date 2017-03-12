<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students index large-9 medium-8 columns content">
    <h3><?= __('Students') ?></h3>
    <table cellpadding="0" cellspacing="0" id="dataTable">
        <thead>
            <tr>
                <!-- Cake Default
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                -->

                <!-- For Data Tables -->
                <th>Id</th>
                <th>Name</th>
                <!--<th>Password</th>-->
                <th>Age</th>
                <th>Gender</th>
                <th>Class Id</th>
                <th>Teacher Id</th>
                <!--
                <th>Created</th>
                <th>Modified</th>
                -->
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $this->Number->format($student->id) ?></td>
                <td><?= h($student->name) ?></td>
                <!--<td><?= h($student->password) ?></td>-->
                <td><?= $this->Number->format($student->age) ?></td>
                <td>
                    <!-- <?= $this->Number->format($student->gender) ?> -->
                    <?= $this->Number->format($student->gender) ? 'Male' : 'Female'?>
                </td>
                <td>
                    <?php
                        switch ($this->Number->format($student->cls->section)) {
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
                    <?= $student->has('cls') ? $this->Html->link($student->cls->name.'-'.$sect, ['controller' => 'Clss', 'action' => 'view', $student->cls->id]) : '' ?>
                </td>
                <td><?= $student->has('teacher') ? $this->Html->link($student->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $student->teacher->id]) : '' ?></td>
                <!--
                <td><?= h($student->created) ?></td>
                <td><?= h($student->modified) ?></td>
                -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- cakephp pagination
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
