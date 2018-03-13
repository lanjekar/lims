<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseaseMaster $diseaseMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disease Master'), ['action' => 'edit', $diseaseMaster->disease_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disease Master'), ['action' => 'delete', $diseaseMaster->disease_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseaseMaster->disease_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disease Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseaseMasters view large-9 medium-8 columns content">
    <h3><?= h($diseaseMaster->disease_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disease Name') ?></th>
            <td><?= h($diseaseMaster->disease_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disease Id') ?></th>
            <td><?= $this->Number->format($diseaseMaster->disease_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($diseaseMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($diseaseMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($diseaseMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($diseaseMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
