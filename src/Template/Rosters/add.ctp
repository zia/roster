<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rosters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Clss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Clss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attendences'), ['controller' => 'Attendences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attendence'), ['controller' => 'Attendences', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rosters form large-9 medium-8 columns content">
    <?= $this->Form->create($roster) ?>
    <fieldset>
        <legend><?= __('Add Roster') ?></legend>
        <div class="input select">
            <label for="class-id">Class</label>
            <select name="class_id" id="class-id">
                <option value></option>
                <?php
                    foreach ($clss as $key => $value) {
                        echo '<optgroup label="Section : ';
                        switch ($key) {
                            case 1:
                                echo 'A';
                                break;
                            case 2:
                                echo 'B';
                                break;
                            case 3:
                                echo 'C';
                                break;
                            default:
                                echo 'D';
                        }
                        echo '">';
                        foreach ($value as $k => $v) {
                            echo '<option value="'.$k.'">'.$v.'</option>';
                        }
                        echo '</optgroup>';
                    }
                ?>
            </select>
        </div>
        <?php
            //echo $this->Form->input('class_id', ['options' => $clss]);
            echo $this->Form->input('teacher_id', ['options' => $teachers, 'empty' => true]);
            echo $this->Form->input('description',['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>