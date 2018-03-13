<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleMaster $sampleMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample Master'), ['action' => 'edit', $sampleMaster->sample_list_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample Master'), ['action' => 'delete', $sampleMaster->sample_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleMaster->sample_list_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sample Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sampleMasters view large-9 medium-8 columns content">
    <h3><?= h($sampleMaster->sample_list_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample Name') ?></th>
            <td><?= h($sampleMaster->sample_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample List Id') ?></th>
            <td><?= $this->Number->format($sampleMaster->sample_list_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($sampleMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($sampleMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($sampleMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($sampleMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
