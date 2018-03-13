<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DistrictMaster $districtMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $districtMaster->district_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $districtMaster->district_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List District Masters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districtMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($districtMaster) ?>
    <fieldset>
        <legend><?= __('Edit District Master') ?></legend>
        <?php
            echo $this->Form->control('state_id', ['options' => $stateMasters]);
            echo $this->Form->control('district_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
