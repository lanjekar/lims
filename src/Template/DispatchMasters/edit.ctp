<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DispatchMaster $dispatchMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dispatchMaster->dispatch_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dispatchMaster->dispatch_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dispatch Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dispatchMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($dispatchMaster) ?>
    <fieldset>
        <legend><?= __('Edit Dispatch Master') ?></legend>
        <?php
            echo $this->Form->control('dispatch_type');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
