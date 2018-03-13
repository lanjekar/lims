<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleMaster $sampleMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sampleMaster->sample_list_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sampleMaster->sample_list_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sample Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sampleMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($sampleMaster) ?>
    <fieldset>
        <legend><?= __('Edit Sample Master') ?></legend>
        <?php
            echo $this->Form->control('sample_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
