<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestMaster $testMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Test Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($testMaster) ?>
    <fieldset>
        <legend><?= __('Add Test Master') ?></legend>
        <?php
            echo $this->Form->control('test_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
