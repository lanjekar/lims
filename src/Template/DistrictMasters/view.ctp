<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DistrictMaster $districtMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit District Master'), ['action' => 'edit', $districtMaster->district_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete District Master'), ['action' => 'delete', $districtMaster->district_id], ['confirm' => __('Are you sure you want to delete # {0}?', $districtMaster->district_id)]) ?> </li>
        <li><?= $this->Html->link(__('List District Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="districtMasters view large-9 medium-8 columns content">
    <h3><?= h($districtMaster->district_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('State Master') ?></th>
            <td><?= $districtMaster->has('state_master') ? $this->Html->link($districtMaster->state_master->state_id, ['controller' => 'StateMasters', 'action' => 'view', $districtMaster->state_master->state_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Name') ?></th>
            <td><?= h($districtMaster->district_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Id') ?></th>
            <td><?= $this->Number->format($districtMaster->district_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($districtMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($districtMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($districtMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($districtMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
