<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMaster $stateMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State Master'), ['action' => 'edit', $stateMaster->state_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State Master'), ['action' => 'delete', $stateMaster->state_id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMaster->state_id)]) ?> </li>
        <li><?= $this->Html->link(__('List State Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stateMasters view large-9 medium-8 columns content">
    <h3><?= h($stateMaster->state_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('State Name') ?></th>
            <td><?= h($stateMaster->state_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Id') ?></th>
            <td><?= $this->Number->format($stateMaster->state_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($stateMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($stateMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($stateMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($stateMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
