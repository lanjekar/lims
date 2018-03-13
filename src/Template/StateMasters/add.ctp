<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMaster $stateMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List State Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stateMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($stateMaster) ?>
    <fieldset>
        <legend><?= __('Add State Master') ?></legend>
        <?php
            echo $this->Form->control('state_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
