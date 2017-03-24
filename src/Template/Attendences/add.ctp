<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['controller' => 'Rosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Roster'), ['controller' => 'Rosters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendences form large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Roster Id') ?></th>
            <td></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td></td>
        </tr>
    </table>
    

    <?= $this->Form->create($attendence) ?>
    <fieldset>
        <legend><?= __('Add Attendence') ?></legend>
        <?php
            #There will be a loop required
            #echo $this->Form->radio('status', ['Absent','Present']);
            #echo $this->Form->input('status');
            #echo $this->Form->input('student_id', ['options' => $students]);
            #echo $this->Form->input('roster_id', ['options' => $rosters]);
        ?>
        <table cellpadding="0" cellspacing="0" id="dataTable">
            <thead>
                <tr>
                    <!-- For Data Tables -->
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Student Id</th>
                    <th class="actions"><?= __('Actions') ?></th>

                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($attendences as $attendence) {
                ?>
                <tr>
                    <td><?= $this->Number->format($attendence->id) ?></td>
                    <td>
                        <?= $attendence->has('student') ? $this->Html->link($attendence->student->name, ['controller' => 'Students', 'action' => 'view', $attendence->student->id]) : '' ?>
                    </td>
                    <td>
                        <?= $attendence->has('student') ? $this->Html->link($attendence->student->id, ['controller' => 'Students', 'action' => 'view', $attendence->student->id]) : '' ?>
                    </td>
                    <td>
                        <?=$this->Form->input($attendence->student->id.'_status', ['type' => 'checkbox', 'required' => '', 'value' => 0, 'label' => 'Absent?'])?>

                        <?=$this->Form->hidden('student_id',['value' => $this->Number->format($attendence->student->id)])?>   
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Save')) ?>
    <?= $this->Form->end() ?>
</div>
