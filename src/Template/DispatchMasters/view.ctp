<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DispatchMaster $dispatchMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dispatch Master'), ['action' => 'edit', $dispatchMaster->dispatch_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dispatch Master'), ['action' => 'delete', $dispatchMaster->dispatch_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dispatchMaster->dispatch_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dispatch Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dispatch Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dispatchMasters view large-9 medium-8 columns content">
    <h3><?= h($dispatchMaster->dispatch_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dispatch Type') ?></th>
            <td><?= h($dispatchMaster->dispatch_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispatch Id') ?></th>
            <td><?= $this->Number->format($dispatchMaster->dispatch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($dispatchMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($dispatchMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($dispatchMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($dispatchMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
