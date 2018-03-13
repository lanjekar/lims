<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpeciesMaster $speciesMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Species Master'), ['action' => 'edit', $speciesMaster->species_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Species Master'), ['action' => 'delete', $speciesMaster->species_id], ['confirm' => __('Are you sure you want to delete # {0}?', $speciesMaster->species_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Species Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Species Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="speciesMasters view large-9 medium-8 columns content">
    <h3><?= h($speciesMaster->species_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Species Name') ?></th>
            <td><?= h($speciesMaster->species_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Species Id') ?></th>
            <td><?= $this->Number->format($speciesMaster->species_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($speciesMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($speciesMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($speciesMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($speciesMaster->modified_on) ?></td>
        </tr>
    </table>
</div>
